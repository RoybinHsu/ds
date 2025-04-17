<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method string|null getInterceptStatus()
 * @method self setInterceptStatus(string $interceptStatus)
 * @method string|null getInterceptInvestor()
 * @method self setInterceptInvestor(string $interceptInvestor)
 * @method string|null getPosCode()
 * @method self setPosCode(string $posCode)
 * @method string|null getRefPlatform()
 * @method self setRefPlatform(string $refPlatform)
 * @method string|null getRefType()
 * @method self setRefType(string $refType)
 * @method string|null getOpenSellerNick()
 * @method self setOpenSellerNick(string $openSellerNick)
 * @method string|null getOpenBuyerNick()
 * @method self setOpenBuyerNick(string $openBuyerNick)
 * @method string|null getRefAid()
 * @method self setRefAid(string $refAid)
 * @method string|null getRefOid()
 * @method self setRefOid(string $refOid)
 * @method string|null getType()
 * @method self setType(string $type)
 * @method string|null getOrderStatus()
 * @method self setOrderStatus(string $orderStatus)
 * @method string|null getRefundPhase()
 * @method self setRefundPhase(string $refundPhase)
 * @method string|null getTotalFee()
 * @method self setTotalFee(string $totalFee)
 * @method string|null getRefundFee()
 * @method self setRefundFee(string $refundFee)
 * @method string|null getLogisticsCompany()
 * @method self setLogisticsCompany(string $logisticsCompany)
 * @method string|null getLogisticsOrderNo()
 * @method self setLogisticsOrderNo(string $logisticsOrderNo)
 * @method string|null getCreateTime()
 * @method self setCreateTime(string $createTime)
 * @method string|null getUpdateTime()
 * @method self setUpdateTime(string $updateTime)
 * @method string|null getRefundCreateTime()
 * @method self setRefundCreateTime(string $refundCreateTime)
 * @method string|null getRefundUpdateTime()
 * @method self setRefundUpdateTime(string $refundUpdateTime)
 * @method string|null getReason()
 * @method self setReason(string $reason)
 * @method string|null getDesc()
 * @method self setDesc(string $desc)
 * @method string|null getAfterStatus()
 * @method self setAfterStatus(string $afterStatus)
 * @method string|null getStatusCode()
 * @method self setStatusCode(string $statusCode)
 * @method string|null getStatusName()
 * @method self setStatusName(string $statusName)
 * @method string|null getRefundTime()
 * @method self setRefundTime(string $refundTime)
 * @method OarqContentLine[]|null getLines()
 * @method self setLines(array $lines)
 */
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
