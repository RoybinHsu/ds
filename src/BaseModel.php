<?php

namespace ds;

use ArrayAccess;
use ds\exceptions\ExistException;


class BaseModel implements ArrayAccess
{
    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * 转成数组
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_filter($this->getProperties(), function ($value) {
            return !is_null($value);
        });
    }

    /**
     * 获取所有属性
     * @return array
     */
    public function getProperties(): array
    {
        return get_object_vars($this);
    }


    /**
     * 获取和设置属性
     *
     * @param $name
     * @param $arguments
     *
     * @return string | $this
     * @throws ExistException
     */
    public function __call($name, $arguments)
    {
        $property = lcfirst(substr($name, 3));
        if (!property_exists($this, $property)) {
            throw new ExistException("Property {$property} does not exist in " . get_class($this));
        }
        $prefix = substr($name, 0, 3);
        if ($prefix === 'set') {
            $this->$property = $arguments[0] ?? null;
            return $this;
        }
        if ($prefix === 'get') {
            return $this->$property;
        }
        throw new ExistException("Method {$name} does not exist in " . get_class($this));
    }

     /**
     * 判断数组方式访问的键是否存在
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return property_exists($this, $offset);
    }

    /**
     * 获取数组方式访问的值
     *
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return $this->$offset;
    }

    /**
     * 设置数组方式访问的值
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }

    /**
     * 通过数组方式删除属性
     *
     * @param mixed $offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        $this->$offset = null;
    }

}
