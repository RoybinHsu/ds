<?php

namespace ds;

use ReflectionClass;
use ReflectionException;

class Utils
{
    /**
     * 将数组对象化,变成方便查看字段名称
     *
     * @param array $data
     * @param $className
     *
     * @return mixed
     * @throws ReflectionException
     */
    public static function array2Object(array $data, $className)
    {
        $object = new $className();
        if ($data) {
            foreach ($data as $key => $value) {
                $propertyName = $key;
                if (property_exists($object, $propertyName)) {
                    // 递归处理嵌套对象
                    [$nestedClass, $isArray] = self::getNestedClass($className, $propertyName);
                    $hasClass = self::classExists($nestedClass);
                    if (is_array($value) && $hasClass !== false) {
                        if (self::isIndexedArray($value)) {
                            foreach ($value as $obj) {
                                $object->$propertyName[] = self::array2Object($obj, $hasClass);
                            }
                        } elseif (self::isAssocArray($value)) {
                            if ($isArray) {
                                $object->$propertyName = [];
                            } else {
                                $object->$propertyName = self::array2Object($value, $hasClass);
                            }
                        }
                    } else {
                        $object->$propertyName = $value;
                    }
                }
            }
        }
        return $object;
    }

    /**
     * 关联数组
     *
     * @param array $array
     *
     * @return bool
     */
    public static function isAssocArray(array $array): bool
    {
        // 如果数组的键与从 0 开始的连续整数不相等，则是关联数组
        return array_keys($array) !== range(0, count($array) - 1);
    }

    /**
     * 枚举数组
     *
     * @param array $array
     *
     * @return bool
     */
    public static function isIndexedArray(array $array): bool
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
    public static function classExists($className)
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
     * @return array|null
     * @throws ReflectionException
     */
    public static function getNestedClass($parentClass, $propertyName): ?array
    {
        $reflection = new ReflectionClass($parentClass);
        $property   = $reflection->getProperty($propertyName);
        $docComment = $property->getDocComment();
        // 解析 @var 注解中的类名（如 BaseResponse|null）
        preg_match('/@var\s+([^\s|]+)/', $docComment, $matches);
        if (!isset($matches[1])) {
            return null;
        }
        $type      = $matches[1];
        $isArray   = substr($type, -2) === '[]';          // Check if it's an array type
        $className = preg_replace('/[\[\]]/', '', $type); // Remove array brackets if present
        return [$className, $isArray];
    }

}
