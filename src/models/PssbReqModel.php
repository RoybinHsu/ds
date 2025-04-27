<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method string getPosId()
 * @method string getSyncType()
 * @method string getStartTime()
 * @method string getEndTime()
 * @method string getSaleStatus()
 * @method self setPosId(string $posId)
 * @method self setSyncType(string $syncType)
 * @method self setStartTime(string $startTime)
 * @method self setEndTime(string $endTime)
 * @method self setSaleStatus(string $saleStatus)
 */
class PssbReqModel extends BaseModel
{
    /**
     * 点三系统店铺ID字段
     * @var string|null
     */
    public ?string $posId = null;

    /**
     * 传固定值：UPDATE_TIME - 更新时间
     * @var string|null
     */
    public ?string $syncType = null;


    /**
     * 开始时间（时间跨度不能超过72小时）；
     * @var string|null
     */
    public ?string $startTime = null;

    /**
     * 结束时间（必须大于开始同步时间；时间跨度不能超过72小时）；
     * @var string|null
     */
    public ?string $endTime = null;

    /**
     * 销售状态，淘宝平台必传
     * @var string|null
     */
    public ?string $saleStatus = null;
}
