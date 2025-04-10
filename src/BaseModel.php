<?php

namespace ds;

use ds\exceptions\ExistException;


class BaseModel
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
        return array_filter(get_object_vars($this), function ($value) {
            return !is_null($value);
        });
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
}
