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
    protected ?string $responseClass = null;

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
     * 构建响应数据
     *
     * @param array $response
     *
     * @return mixed|BaseModel
     * @throws ReflectionException
     */
    public function buildResponse(array $response)
    {
        if ($this->responseClass === null) {
            return $response;
        }
        return $this->array2Object($response['response']['data'], $this->responseClass);
    }

    /**
     * 将数组对象化,变成方便查看字段名称
     *
     * @param array $data
     * @param $className
     *
     * @return mixed
     * @throws ReflectionException
     */
    public function array2Object(array $data, $className)
    {
        $object = new $className();
        if ($data) {
            foreach ($data as $key => $value) {
                $propertyName = $key;
                if (property_exists($object, $propertyName)) {
                    // 递归处理嵌套对象
                    $nestedClass = $this->getNestedClass($className, $propertyName);
                    $hasClass    = $this->classExists($nestedClass);
                    if (is_array($value) && $hasClass !== false) {
                        if ($this->isIndexedArray($value)) {
                            foreach ($value as $obj) {
                                $object->$propertyName[] = $this->array2Object($obj, $hasClass);
                            }
                        } elseif ($this->isAssocArray($value)) {
                            $object->$propertyName = $this->array2Object($value, $hasClass);
                        }
                    } else {
                        $object->$propertyName = $value;
                    }
                }
            }
        }
        return $object;
    }

    public function isAssocArray(array $array): bool
    {
        // 如果数组的键与从 0 开始的连续整数不相等，则是关联数组
        return array_keys($array) !== range(0, count($array) - 1);
    }

    public function isIndexedArray(array $array): bool
    {
        // 如果数组的键与从 0 开始的连续整数相等，则是枚举数组
        return array_keys($array) === range(0, count($array) - 1);
    }

    /**
     *
     * 检查类是否存在
     *
     * @param $className
     *
     * @return bool|string
     */
    public function classExists($className)
    {
        //echo $className . " 99999\n";
        if (class_exists($className)) {
            return $className;
        }
        if (class_exists('\\ds\\' . $className)) {
            return '\\ds\\' . $className;
        }
        if (class_exists('\\ds\\models\\' . $className)) {
            return '\\ds\\models\\' . $className;
        }
        if (class_exists('\\ds\\models\\base\\' . $className)) {
            return '\\ds\\models\\base\\' . $className;
        }
        return false;
    }


    /**
     * @param $parentClass
     * @param $propertyName
     *
     * @return string|null
     * @throws ReflectionException
     */
    public function getNestedClass($parentClass, $propertyName): ?string
    {
        $reflection = new ReflectionClass($parentClass);
        $property   = $reflection->getProperty($propertyName);
        $docComment = $property->getDocComment();
        // 解析 @var 注解中的类名（如 BaseResponse|null）
        preg_match('/@var\s+([^\s|]+)/', $docComment, $matches);
        return preg_replace('/[\[\]]/', '', $matches[1]) ?? null;
    }


}
