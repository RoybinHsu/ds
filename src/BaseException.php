<?php

namespace ds;

use Exception;

class BaseException extends Exception
{
    protected $code = 0;
    protected $message = '系统错误';

    public function __construct($message = null)
    {
        if ($message) {
            $this->message = $message;
        }
        parent::__construct($this->message, $this->code);
    }
}
