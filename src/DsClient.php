<?php

namespace ds;

use ds\exceptions\HttpException;
use ds\exceptions\InvalidException;
use GuzzleHttp\Client as GzClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

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
        parent::__construct();
    }

    /**
     * 发送一个请求
     *
     * @param RequestInterface $request
     *
     * @return array|null
     * @throws GuzzleException
     * @throws HttpException
     * @throws InvalidException
     */
    public function send(RequestInterface $request): ?array
    {
        $url      = $this->buildUrl();
        $options  = $this->buildRequestOptions($request);
        $client   = new GzClient(['base_uri' => $url]);
        $response = $client->request($request->getMethod(), '', $options);
        if ($response->getStatusCode() !== 200) {
            throw new HttpException('HTTP 请求失败，状态码：' . $response->getStatusCode());
        }
        return $this->parseResponse($response->getBody()->getContents());
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
        $this->_options = [
            RequestOptions::HEADERS => $request->getHeaders(),
            RequestOptions::BODY    => json_encode($request->getParams()),
            RequestOptions::QUERY   => $this->requestCommonParams($request)->toArray(),
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
                throw new InvalidException('点三系统响应数据无效：无法解析 JSON');
            }
            return $decoded;
        }
        throw new InvalidException('点三系统响应数据无效：响应为空');
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
        $sign = $this->sign($model, json_encode($request->getParams(), JSON_UNESCAPED_UNICODE));
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
        $sortKey = ['method', 'timestamp', 'tag', 'reqId'];
        $signStr = 'appKey' . $this->appKey;
        $common  = $common->toArray();
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
        return $this->sign($common, $body) === $sign;
    }

    public function getOptions(): array
    {
        return $this->_options;
    }
}
