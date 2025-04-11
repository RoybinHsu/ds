<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method string getSerialTypes()
 * @method string getSerialNumbers()
 * @method string getImeis()
 * @method self setSerialTypes(string $serialTypes)
 * @method self setSerialNumbers(string $serialNumbers)
 * @method self setImeis(string $imeis)
 */
class SerialInfoModel extends BaseModel
{
    /**
     * 当前订单码类型
     * @var array|null
     */
    public ?array $serialTypes = null;

    /**
     * 当前订单SN码列表
     * @var array|null
     */
    public ?array $serialNumbers = null;

    /**
     * 当前订单IMEI码列表
     * @var array|null
     */
    public ?array $imeis = null;

}
