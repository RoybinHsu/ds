<?php
namespace ds;

use ds\responses\OrderQueryResponse;
use ds\Response;

interface RequestInterface
{
    /**
     * 获取请求头
     *
     * @return array
     */
    public function getHeaders(): array;

    /**
     * 请求的业务参数
     *
     * @return array
     */
    public function getParams(): array;

    /**
     * 对应ds 得 公共参数中method
     *
     * @return string
     */
    public function getUri(): string;

    /**
     * 获取接口请求的方式 post 或者 get
     *
     * @return string
     */
    public function getMethod(): string;


    /**
     * 设置响应的数据
     * @return mixed
     */
    public function buildResponse(array $response);



}
