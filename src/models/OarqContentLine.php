<?php

namespace ds\models;

use ds\BaseModel;

/**
 * Setter 方法组
 * * @method self setRefAid(?string $refAid) 设置平台售后单ID
 * * @method self setRefAlId(?string $refAlId) 设置平台售后子单ID
 * * @method self setRefOid(?string $refOid) 设置平台订单ID
 * * @method self setRefOlId(?string $refOlId) 设置平台子订单ID
 * * @method self setTotalFee(?float $totalFee) 设置总收入
 * * @method self setRefundFee(?float $refundFee) 设置退款金额
 * * @method self setPrice(?float $price) 设置商品单价
 * * @method self setNum(?int $num) 设置商品数量
 * * @method self setRefSpuId(?string $refSpuId) 设置平台SPU_ID
 * * @method self setRefSkuId(?string $refSkuId) 设置平台SKU_ID
 * * @method self setOuterId(?string $outerId) 设置商家编码
 * * @method self setTitle(?string $title) 设置商品标题
 * * @method self setRefBoughtSkuId(?string $refBoughtSkuId) 设置购买SKU（换出SKU）
 * * @method self setRefundStatus(?string $refundStatus) 设置退款状态
 * * @method self setType(?int $type) 设置类型标识
 * *
 * * // Getter 方法组
 * * @method string|null getRefAid() 获取平台售后单ID
 * * @method string|null getRefAlId() 获取平台售后子单ID
 * * @method string|null getRefOid() 获取平台订单ID
 * * @method string|null getRefOlId() 获取平台子订单ID
 * * @method float|null getTotalFee() 获取总收入
 * * @method float|null getRefundFee() 获取退款金额
 * * @method float|null getPrice() 获取商品单价
 * * @method int|null getNum() 获取商品数量
 * * @method string|null getRefSpuId() 获取平台SPU_ID
 * * @method string|null getRefSkuId() 获取平台SKU_ID
 * * @method string|null getOuterId() 获取商家编码
 * * @method string|null getTitle() 获取商品标题
 * * @method string|null getRefBoughtSkuId() 获取购买SKU（换出SKU）
 * * @method string|null getRefundStatus() 获取退款状态
 * * @method int|null getType() 获取类型标识
 */
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

    /**
     * 类型
     * @var int|null
     */
    public ?int $type = null;
}
