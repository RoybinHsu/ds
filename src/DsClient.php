<?php

namespace ds;

use ds\exceptions\HttpException;
use ds\exceptions\InvalidException;
use GuzzleHttp\Client as GzClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use ReflectionClass;
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
     * @throws ReflectionException
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
            RequestOptions::BODY  => json_encode($request->getParams()),
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
                $this->event->trigger(Event::SEND_ERROR, $msg);
                throw new InvalidException($msg);
            }
            return $decoded;
        }
        $msg = '点三系统响应数据无效：响应为空';
        $this->event->trigger(Event::SEND_ERROR, $msg);
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
        $body    = json_decode($body, true);
        $signStr .= json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
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

    /**
     * 构建响应数据
     *
     * @param BaseRequest $request
     * @param array $response
     *
     * @return mixed|BaseModel
     * @throws ReflectionException
     */
    public function buildResponse(BaseRequest $request, array $response)
    {
        if ($request->responseClass === null) {
            return $response;
        }
        return $this->array2Object($response['response']['data'], $request->responseClass);
    }

    /**
     * 将数组对象化,变成方便查看字段名称
     *
     * @param array $data
     * @param $className
     *
     * @return mixed
     * @throws ReflectionException
     */
    public function array2Object(array $data, $className)
    {
        $object = new $className();
        if ($data) {
            foreach ($data as $key => $value) {
                $propertyName = $key;
                if (property_exists($object, $propertyName)) {
                    // 递归处理嵌套对象
                    [$nestedClass, $isArray] = $this->getNestedClass($className, $propertyName);
                    $hasClass = $this->classExists($nestedClass);
                    if (is_array($value) && $hasClass !== false) {
                        if ($this->isIndexedArray($value)) {
                            foreach ($value as $obj) {
                                $object->$propertyName[] = $this->array2Object($obj, $hasClass);
                            }
                        } elseif ($this->isAssocArray($value)) {
                            if ($isArray) {
                                $object->$propertyName = [];
                            } else {
                                $object->$propertyName = $this->array2Object($value, $hasClass);
                            }
                        }
                    } else {
                        $object->$propertyName = $value;
                    }
                }
            }
        }
        return $object;
    }

    /**
     * 关联数组
     *
     * @param array $array
     *
     * @return bool
     */
    public function isAssocArray(array $array): bool
    {
        // 如果数组的键与从 0 开始的连续整数不相等，则是关联数组
        return array_keys($array) !== range(0, count($array) - 1);
    }

    /**
     * 枚举数组
     *
     * @param array $array
     *
     * @return bool
     */
    public function isIndexedArray(array $array): bool
    {
        // 如果数组的键与从 0 开始的连续整数相等，则是枚举数组
        return array_keys($array) === range(0, count($array) - 1);
    }

    /**
     *
     * 检查类是否存在
     *
     * @param $className
     *
     * @return bool|string
     */
    public function classExists($className)
    {
        //echo $className . " 99999\n";
        if (class_exists($className)) {
            return $className;
        }
        if (class_exists('\\ds\\' . $className)) {
            return '\\ds\\' . $className;
        }
        if (class_exists('\\ds\\models\\' . $className)) {
            return '\\ds\\models\\' . $className;
        }
        if (class_exists('\\ds\\models\\base\\' . $className)) {
            return '\\ds\\models\\base\\' . $className;
        }
        return false;
    }


    /**
     * @param $parentClass
     * @param $propertyName
     *
     * @return array|null
     * @throws ReflectionException
     */
    public function getNestedClass($parentClass, $propertyName): ?array
    {
        $reflection = new ReflectionClass($parentClass);
        $property   = $reflection->getProperty($propertyName);
        $docComment = $property->getDocComment();
        // 解析 @var 注解中的类名（如 BaseResponse|null）
        preg_match('/@var\s+([^\s|]+)/', $docComment, $matches);
        if (!isset($matches[1])) {
            return null;
        }
        $type      = $matches[1];
        $isArray   = substr($type, -2) === '[]';          // Check if it's an array type
        $className = preg_replace('/[\[\]]/', '', $type); // Remove array brackets if present
        return [$className, $isArray];
    }


}
