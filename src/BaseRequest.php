<?php

namespace ds;

use ds\models\OrderQueryModel;
use ds\RequestInterface;
use ds\responses\OrderQueryResponse;
use GuzzleHttp\RequestOptions;
use ReflectionClass;
use ReflectionException;
use ds\BaseResponse;
use ds\Response;

abstract class BaseRequest implements RequestInterface
{
    /**
     * @var string | null
     */
    public ?string $responseClass = null;

    /**
     * 强行返回数组类型
     * @var bool|null
     */
    public ?bool $responseArray = false;

    /**
     * @var BaseModel | array
     */
    protected $data;

    public function __construct(?BaseModel $data = null)
    {
        $this->data = $data;
        if ($this->responseArray) {
            $this->responseClass = null;
        }
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
