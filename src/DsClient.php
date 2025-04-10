<?php

namespace ds;

use Exception;
use GuzzleHttp\Client as GzClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

class DsClient implements ClientInterface
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


    public string $appKey = '';
    public string $appSecret = '';
    public int $timestamp = 0;

    /**
     * 初始化数据
     *
     * @param string $appKey
     * @param string $appSecret
     */
    public function __construct(string $appKey, string $appSecret)
    {
        $this->appKey    = $appKey;
        $this->appSecret = $appSecret;
        $this->timestamp = time();
    }

    /**
     * 发送一个请求
     *
     * @param RequestInterface $request
     *
     * @return array|null
     */
    public function send(RequestInterface $request): ?array
    {
        $header       = $request->getHeaders();
        $body         = $request->getParams();
        $method       = $request->getMethod();
        $commonParams = $this->getCommonParams($request);
        $url          = rtrim($this->host, '/');
        if ($this->port) {
            $url .= ':' . $this->port;
        }
        $options[RequestOptions::HEADERS] = $header;
        $options[RequestOptions::BODY]    = json_encode($body);
        $options[RequestOptions::QUERY]   = $commonParams;
        echo json_encode($options) . "\n\n";
        die;
        try {
            $client = new GzClient(['base_uri' => $url]);
            $res    = $client->request($method, '', $options);
            if ($res->getStatusCode() != 200) {
                throw new Exception('网络错误');
            }
            $response = $res->getBody()->getContents();
            return json_decode($response, true);
        } catch (Exception | GuzzleException $e) {
            return null;
        }
    }

    /**
     * 获取公共参数
     *
     * @return array[]
     */
    public function getCommonParams(RequestInterface $request): array
    {
        return [
            'appKey'    => $this->appKey,
            'method'    => $request->getUri(),
            'timestamp' => $this->timestamp,
            'sign'      => $this->sign($request),
        ];
    }

    /**
     * 签名算法
     *
     * @return void
     */
    public function sign(RequestInterface $request): string
    {
        $timestamp = time();
        $signStr   = 'appKey' . $this->appKey . 'method' . $request->getUri() . 'timestamp' . $timestamp;
        $params    = json_encode($request->getParams());
        $signStr   .= $params;
        return strtoupper(md5($this->appSecret . $signStr . $this->appSecret));
    }
}
