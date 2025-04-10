<?php
namespace ds\exceptions;

use ds\BaseException;

class ExistException extends BaseException
{
    protected $code = 404;
    protected $message = '数据不存在';
}
