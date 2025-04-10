<?php

namespace ds;

use ds\models\OrderQueryModel;
use ds\RequestInterface;
use GuzzleHttp\RequestOptions;

abstract class BaseRequest implements RequestInterface
{

    /**
     * @var BaseModel | array
     */
    protected $data;
    public function __construct(?BaseModel $data = null)
    {
        $this->data = $data;
    }

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

    /**
     * @inheritDoc
     */
    public function getParams(): array
    {
        return $this->data->toArray();
    }


}
