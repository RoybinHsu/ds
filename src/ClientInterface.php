<?php
namespace ds;

use ds\RequestInterface;

interface ClientInterface
{
    /**
     * 发送一个api请求
     *
     * @param BaseRequest $request
     *
     * @return mixed
     */
    public function send(BaseRequest $request);

}
