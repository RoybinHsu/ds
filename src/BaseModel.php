<?php

namespace ds;

use Exception;


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
     * @return string
     */
    public function __call($name, $arguments)
    {
        $property = lcfirst(substr($name, 3));
        if (!property_exists($this, $property)) {
            throw new Exception("Property {$property} does not exist in " . get_class($this));
        }
        if (str_starts_with($name, 'set')) {
            $this->$property = $arguments[0] ?? null;
            return $this;
        }
        if (str_starts_with($name, 'get')) {
            return $this->$property;
        }
        throw new Exception("Method {$name} does not exist in " . get_class($this));
    }
}
