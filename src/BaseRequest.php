<?php

namespace ds;

use ds\RequestInterface;
use GuzzleHttp\RequestOptions;

abstract class BaseRequest implements RequestInterface
{

    /**
     * @inheritDoc
     */
    public function getHeaders(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return 'POST';
    }


}
