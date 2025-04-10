<?php

namespace ds\exceptions;

use ds\BaseException;

class InvalidException extends BaseException
{

    protected $code = 501;
    protected $message = '数据无效';
}
