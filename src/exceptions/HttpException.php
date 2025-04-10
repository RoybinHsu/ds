<?php

namespace ds\exceptions;

use ds\BaseException;

class HttpException extends BaseException
{
    protected $code = 500;
    protected $message = '网络错误';

}
