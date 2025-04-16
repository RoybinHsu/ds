<?php

namespace ds\models;

use ds\BaseModel;

class OarqContentLine extends BaseModel
{
    /**
     * 平台售后单id
     * @var string|null
     */
    public ?string $refAid = null;

    /**
     * 平台售后子单id
     * @var string|null
     */
    public ?string $refAlId = null;

    /**
     * 平台订单id
     * @var string|null
     */
    public ?string $refOid = null;

    /**
     * 平台子订单id
     * @var string|null
     */
    public ?string $refOlId = null;

    /**
     * 总收入
     * @var float|null
     */
    public ?float $totalFee = null;

    /**
     * 退款金额
     * @var float|null
     */
    public ?float $refundFee = null;

    /**
     * 单价
     * @var float|null
     */
    public ?float $price = null;

    /**
     * 商品数量
     * @var int|null
     */
    public ?int $num = null;

    /**
     * 平台SPU_ID
     * @var string|null
     */
    public ?string $refSpuId = null;

    /**
     * 平台SKU_ID
     * @var string|null
     */
    public ?string $refSkuId = null;

    /**
     * 商家编码
     * @var string|null
     */
    public ?string $outerId = null;

    /**
     * 商品标题
     * @var string|null
     */
    public ?string $title = null;

    /**
     * 购买的sku(换出的sku)只有换货单有值；表示订单原有商品
     * @var string|null
     */
    public ?string $refBoughtSkuId = null;

    /**
     * 商品退款状态
     * @var string|null
     */
    public ?string $refundStatus = null;
}
