<?php

namespace ds\models;

use ds\BaseModel;

class OarqContent extends BaseModel
{
    /**
     * 物流包裹拦截状态
     * @var string|null
     */
    public ?string $interceptStatus = null;

    /**
     * 物流包裹拦截出资者
     * @var string|null
     */
    public ?string $interceptInvestor = null;

    /**
     * 店铺编码
     * @var string|null
     */
    public ?string $posCode = null;

    /**
     * 店铺平台类型
     * @var string|null
     */
    public ?string $refPlatform = null;

    /**
     * 子平台类型
     * @var string|null
     */
    public ?string $refType = null;

    /**
     * 平台商家昵称
     * @var string|null
     */
    public ?string $openSellerNick = null;

    /**
     * 平台买家昵称
     * @var string|null
     */
    public ?string $openBuyerNick = null;

    /**
     * 平台售后单号
     * @var string|null
     */
    public ?string $refAid = null;

    /**
     * 平台订单号
     * @var string|null
     */
    public ?string $refOid = null;

    /**
     * 售后类型
     * @var string|null
     */
    public ?string $type = null;

    /**
     * 订单状态
     * @var string|null
     */
    public ?string $orderStatus = null;

    /**
     * 退款阶段
     * @var string|null
     */
    public ?string $refundPhase = null;

    /**
     * 订单总费用
     * @var string|null
     */
    public ?string $totalFee = null;

    /**
     * 退款金额
     * @var string|null
     */
    public ?string $refundFee = null;

    /**
     * 物流公司
     * @var string|null
     */
    public ?string $logisticsCompany = null;

    /**
     * 物流单号
     * @var string|null
     */
    public ?string $logisticsOrderNo = null;

    /**
     * 创建时间
     * @var string|null
     */
    public ?string $createTime = null;

    /**
     * 更新时间
     * @var string|null
     */
    public ?string $updateTime = null;

    /**
     * 平台退款申请时间
     * @var string|null
     */
    public ?string $refundCreateTime = null;

    /**
     * 平台退款更新时间
     * @var string|null
     */
    public ?string $refundUpdateTime = null;

    /**
     * 退款原因
     * @var string|null
     */
    public ?string $reason = null;

    /**
     * 退款说明
     * @var string|null
     */
    public ?string $desc = null;

    /**
     * 售后状态
     * @var string|null
     */
    public ?string $afterStatus = null;

    /**
     * 平台售后状态编码
     * @var string|null
     */
    public ?string $statusCode = null;

    /**
     * 平台售后状态描述
     * @var string|null
     */
    public ?string $statusName = null;

    /**
     * 退款成功时间
     * @var string|null
     */
    public ?string $refundTime = null;

    /**
     * 订单详情
     * @var OarqContentLine[]|null
     */
    public ?array $lines = null;

}
