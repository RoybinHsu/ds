<?php

namespace ds\models;

use ds\BaseModel;


/**
 * 物流信息
 * @method string getLogisticId()
 * @method string getLogisticName()
 * @method string getLogisticCode()
 * @method string getLogisticNo()
 * @method self setLogisticId(string $logisticId)
 * @method self setLogisticName(string $logisticName)
 * @method self setLogisticCode(string $logisticCode)
 * @method self setLogisticNo(string $logisticNo)
 */
class LogisticListModel extends BaseModel
{
    /**
     * 物流 ID
     * @var string|null
     */
    public ?string $logisticId = null;

    /**
     * 物流名称
     * @var string|null
     */
    public ?string $logisticName = null;

    /**
     * 物流编码
     * @var string|null
     */
    public ?string $logisticCode = null;

    /**
     * 物流单号
     * @var string|null
     */
    public ?string $logisticNo = null;

}
