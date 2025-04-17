<?php

namespace ds;

use ds\exceptions\HttpException;
use ReflectionException;


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

    /**
     * @param array $response
     *
     * @return BaseModel|mixed
     * @throws ReflectionException
     * @throws HttpException
     */
    public function beforeResponse(array $response)
    {
        if ($this->responseClass === null) {
            return $response;
        }
        if (($response['response']['flag'] ?? '') === 'success' || ($response['response']['success'] ?? null) === true) {
            return Utils::array2Object($response['response']['data'], $this->responseClass);
        }
        throw new HttpException('接口响应错误');
    }


}
