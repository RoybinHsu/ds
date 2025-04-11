<?php

namespace ds\models;

use ds\BaseModel;

/**
 * 子订单明细
 * @method string getRefOlId()
 * @method string getRefSpuId()
 * @method string getRefSkuId()
 * @method string getOuterId()
 * @method string getTitle()
 * @method string getStandards()
 * @method float getTotalSellPrice()
 * @method float getTotalPrice()
 * @method float getPrice()
 * @method float getSellPrice()
 * @method string getTotalFee()
 * @method string getSingleFee()
 * @method int getNum()
 * @method string getRefundStatus()
 * @method string getStatus()
 * @method string getPicUrl()
 * @method string getIsFreeGift()
 * @method array getMark2()
 * @method float getPayment()
 * @method string getPlatServiceFee()
 * @method self setRefOlId(string $refOlId)
 * @method self setRefSpuId(string $refSpuId)
 * @method self setRefSkuId(string $refSkuId)
 * @method self setOuterId(string $outerId)
 * @method self setTitle(string $title)
 * @method self setStandards(string $standards)
 * @method self setTotalSellPrice(float $totalSellPrice)
 * @method self setTotalPrice(float $totalPrice)
 * @method self setPrice(float $price)
 * @method self setSellPrice(float $sellPrice)
 * @method self setTotalFee(string $totalFee)
 * @method self setSingleFee(string $singleFee)
 * @method self setNum(int $num)
 * @method self setRefundStatus(string $refundStatus)
 * @method self setStatus(string $status)
 * @method self setPicUrl(string $picUrl)
 * @method self setIsFreeGift(string $isFreeGift)
 * @method self setMark2(array $mark2)
 * @method self setPayment(float $payment)
 * @method self setPlatServiceFee(string $platServiceFee)
 * @see OrderContentModel::OrderStatusMap
 * @see LinePropsModel::BizDeliveryTypeMap
 * @see LinePropsModel::BizDeliveryCodeMap
 * @see LinePropsModel::BlackDeliveryCpsMap
 * @see LinePropsModel::WhiteDeliveryCpsMap
 * @see LineModel::RefundStatusMap
 * @see LineModel::Mark2Map
 */
class LineModel extends BaseModel
{

    // RefundStatus 类型
    const RefundStatusNone = 'NONE';                                    // 未知
    const RefundStatusNoRefund = 'NO_REFUND';                           // 无退款
    const RefundStatusRefunding = 'REFUNDING';                          // 申请退款
    const RefundStatusPartRefunded = 'PART_REFUNDED';                   // 部分退款完成
    const RefundStatusRefunded = 'REFUNDED';                            // 退款完成
    const RefundStatusWaitBuyerReturnGoods = 'WAIT_BUYER_RETURN_GOODS'; // 等待买家退货
    const RefundStatusRejectRefunded = 'REJECT_REFUNDED';               // 拒绝退货

    const RefundStatusMap = [
        self::RefundStatusNone                 => '未知',
        self::RefundStatusNoRefund             => '无退款',
        self::RefundStatusRefunding            => '申请退款',
        self::RefundStatusPartRefunded         => '部分退款完成',
        self::RefundStatusRefunded             => '退款完成',
        self::RefundStatusWaitBuyerReturnGoods => '等待买家退货',
        self::RefundStatusRejectRefunded       => '拒绝退货',
    ];

     // Mark2 类型
     const Mark2Delivered = 'DELIVERED';          // 已发货
     const Mark2Gift = 'GIFT';                    // 赠品
     const Mark2Yang = 'YANG';                    // 样品
     const Mark2ShunYou = 'SHUN_YOU';             // 顺丰包邮
     const Mark2OrderSupply = 'ORDER_SUPPLY';     // 供应商发货
     const Mark2Map = [
         self::Mark2Delivered   => '已发货',
         self::Mark2Gift        => '赠品',
         self::Mark2Yang        => '样品',
         self::Mark2ShunYou     => '顺丰包邮',
         self::Mark2OrderSupply => '供应商发货',
     ];

    /**
     * 子订单 ID
     * @var string|null
     */
    public ?string $refOlId = null;

    /**
     * 平台 SPU ID
     * @var string|null
     */
    public ?string $refSpuId = null;

    /**
     * 平台 SKU ID
     * @var string|null
     */
    public ?string $refSkuId = null;

    /**
     * 商家编码
     * @var string|null
     */
    public ?string $outerId = null;

    /**
     * 货品标题
     * @var string|null
     */
    public ?string $title = null;

    /**
     * 货品规格
     * @var string|null
     */
    public ?string $standards = null;

    /**
     * 售价合计
     * @var float|null
     */
    public ?float $totalSellPrice = null;

    /**
     * 原价合计
     * @var float|null
     */
    public ?float $totalPrice = null;

    /**
     * 原价
     * @var float|null
     */
    public ?float $price = null;

    /**
     * 售价
     * @var float|null
     */
    public ?float $sellPrice = null;

    /**
     * 应收金额
     * @var string|null
     */
    public ?string $totalFee = null;

    /**
     * 单个商品应收金额
     * @var string|null
     */
    public ?string $singleFee = null;

    /**
     * 数量
     * @var int|null
     */
    public ?int $num = null;

    /**
     * 退款状态
     * @see self::RefundStatusMap
     * @var string|null
     */
    public ?string $refundStatus = null;

    /**
     * 子订单状态
     * @see OrderContentModel::OrderStatusMap
     * @var string|null
     */
    public ?string $status = null;

    /**
     * 商品图片URL
     * @var string|null
     */
    public ?string $picUrl = null;

    /**
     * 是否赠品
     * @var string|null
     */
    public ?string $isFreeGift = null;

    /**
     *
     * 订单标记
     * @see self::Mark2Map
     * @var array|null
     */
    public ?array $mark2 = null;

    /**
     * 子订单实付金额-目前仅支持淘宝平台
     * @var float|null
     */
    public ?float $payment = null;

    /**
     * 平台服务费
     * @var string|null
     */
    public ?string $platServiceFee = null;


    /**
     *
     * @var LinePropsModel|null
     */
    public ?LinePropsModel $props = null;




}
