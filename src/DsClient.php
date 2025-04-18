<?php

namespace ds;

use ds\exceptions\HttpException;
use ds\exceptions\InvalidException;
use GuzzleHttp\Client as GzClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use ReflectionException;

/**
 * @method string getHost()
 * @method string getPort()
 * @method string getAppKey()
 * @method string getAppSecret()
 * @method self setHost(string $host)
 * @method self setPort(string $port)
 * @method self setAppKey(string $appKey)
 * @method self setAppSecret(string $appSecret)
 */
class DsClient extends BaseModel implements ClientInterface
{
    /**
     * host
     * @var string
     */
    public string $host = 'http://open_3rd.product.diansan.com/open/oms/router';
    /**
     * 端口
     * @var string
     */
    public string $port = '';


    /**
     * appKey
     *
     * @var string
     */
    public string $appKey = '';
    /**
     * appSecret
     *
     * @var string
     */
    public string $appSecret = '';

    private array $_options;

    /**
     * 时间机
     *
     * @var Event|null
     */
    public ?Event $event = null;

    /**
     * 初始化数据
     *
     * @param string $appKey
     * @param string $appSecret
     *
     * @throws InvalidException
     */
    public function __construct(string $appKey, string $appSecret)
    {
        $this->appKey    = $appKey;
        $this->appSecret = $appSecret;
        if (!$this->appKey || !$this->appSecret) {
            throw new InvalidException('缺少参数 [appKey] 或 [appSecret]');
        }
        $this->event = $this->event ?? new Event();
        parent::__construct();
    }

    /**
     * 发送一个请求
     *
     * @param BaseRequest $request
     *
     * @return mixed|null
     * @throws GuzzleException
     * @throws HttpException
     * @throws InvalidException
     */
    public function send(BaseRequest $request)
    {
        $url     = $this->buildUrl();
        $options = $this->buildRequestOptions($request);
        $client  = new GzClient(['base_uri' => $url]);
        $this->event->trigger(Event::BEFORE_SEND, $options);
        $response = $client->request($request->getMethod(), '', $options);
        if ($response->getStatusCode() !== 200) {
            $msg = 'HTTP 请求失败，状态码：' . $response->getStatusCode();
            $this->event->trigger(Event::SEND_ERROR, $msg, $response);
            throw new HttpException($msg);
        }
        $res = $this->parseResponse($response->getBody()->getContents());
        $this->event->trigger(Event::AFTER_SEND, $res);
        return $this->buildResponse($request, $res);
    }

    /**
     * 构建完整的 URL
     *
     * @return string
     */
    private function buildUrl(): string
    {
        $url = rtrim($this->host, '/');
        if ($this->port) {
            $url .= ':' . $this->port;
        }
        return $url;
    }

    /**
     * 构建请求选项
     *
     * @param RequestInterface $request
     *
     * @return array
     */
    private function buildRequestOptions(RequestInterface $request): array
    {
        if (!empty($request->getHeaders())) {
            $this->_options[RequestOptions::HEADERS] = $request->getHeaders();
        }
        $this->_options = [
            RequestOptions::BODY  => json_encode($request->getParams(),
                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
            RequestOptions::QUERY => $this->requestCommonParams($request)->toArray(),
        ];
        return $this->_options;
    }

    /**
     * 解析响应数据
     *
     * @param string $response
     *
     * @return array|null
     * @throws InvalidException
     */
    private function parseResponse(string $response): ?array
    {
        if ($response) {
            $decoded = json_decode($response, true);
            if ($decoded === null) {
                $msg = '点三系统响应数据无效：无法解析 JSON';
                $this->event->trigger(Event::SEND_ERROR, $msg, $response);
                throw new InvalidException($msg);
            }
            return $decoded;
        }
        $msg = '点三系统响应数据无效：响应为空';
        $this->event->trigger(Event::SEND_ERROR, $msg, $response);
        throw new InvalidException($msg);
    }

    /**
     * 获取公共参数
     *
     * @param RequestInterface $request
     *
     * @return CommonParamsModel
     */
    public function requestCommonParams(RequestInterface $request): CommonParamsModel
    {
        $commonPrams = [
            'appKey'    => $this->appKey,
            'method'    => $request->getUri(),
            'timestamp' => time(),
        ];
        $model       = new CommonParamsModel($commonPrams);
        return $this->_sign($model, $request);
    }

    /**
     * 计算签名
     *
     * @param CommonParamsModel $model
     * @param RequestInterface $request
     *
     * @return CommonParamsModel
     */
    protected function _sign(CommonParamsModel $model, RequestInterface $request): CommonParamsModel
    {
        $sign = $this->sign($model,
            json_encode($request->getParams(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        $model->setSign($sign);
        return $model;
    }

    /**
     * 签名算法
     *
     * @param CommonParamsModel $common
     * @param string $body
     *
     * @return string
     */
    public function sign(CommonParamsModel $common, string $body): string
    {
        $sortKey = ['appKey', 'method', 'timestamp', 'tag', 'reqId'];
        $signStr = '';
        $common->setAppKey($this->appKey);
        $common = $common->toArray();
        sort($sortKey, SORT_ASC);
        foreach ($sortKey as $k) {
            if (isset($common[$k])) {
                $signStr .= $k . $common[$k];
            }
        }
        $signStr .= $body;
        return strtoupper(md5($this->appSecret . $signStr . $this->appSecret));
    }

    /**
     *
     * 核验签名
     *
     * @param CommonParamsModel $common
     * @param string $body
     * @param string $sign
     *
     * @return bool
     */
    public function checkSign(CommonParamsModel $common, string $body, string $sign): bool
    {
        return $this->sign($common, $body) === strtoupper($sign);
    }

    public function getOptions(): array
    {
        return $this->_options;
    }

    /**
     * 构建响应数据
     *
     * @param BaseRequest $request
     * @param array $response
     *
     * @return mixed|BaseModel
     * @throws HttpException
     */
    public function buildResponse(BaseRequest $request, array $response)
    {
        try {
            return $request->beforeResponse($response);
        } catch (ReflectionException|HttpException $e) {
            $msg = '点三系统响应数据无效：' . $e->getMessage();
            $this->event->trigger(Event::SEND_ERROR, $msg, $response);
            throw new HttpException($msg);
        }
    }
}
