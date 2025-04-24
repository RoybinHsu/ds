<?php

namespace ds\models;

use ds\BaseModel;

/**
 * 请求model
 * @see http://wiki.yitaosoft.com/#/share/5wXnJGX9/OmzWOxzl
 */
class PassReqModel extends BaseModel
{
    /**
     * 同步类型 ，传固定值：STORE
     * @var null | string
     */
    public ?string $syncType = null;

    /**
     * 店铺ID，Long类型。可在接口ds.omni.erp.third.pos.sku.query查询得到
     * @var int|null
     */
    public ?int $posId = null;

    /**
     * 商品销售状态，淘宝平台必传
     * @var string|null
     */
    public ?string $saleStatus = null;

}
