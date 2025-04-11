<?php

namespace ds\models;

use ds\BaseModel;

/**
 * 订单内容模型
 * @method string getRefOid()
 * @method string getPosCode()
 * @method string getRefType()
 * @method float getTotalFee()
 * @method float getPayment()
 * @method float getReceivedPayment()
 * @method float getTotalPrice()
 * @method float getTotalSellPrice()
 * @method float getPostFee()
 * @method float getServiceFee()
 * @method float getDiscountFee()
 * @method string getOrderTime()
 * @method string getModifyTime()
 * @method string getPayTime()
 * @method string getShippingTime()
 * @method string getFinishTime()
 * @method string getReceiverCountry()
 * @method string getReceiverState()
 * @method string getReceiverCity()
 * @method string getReceiverDistrict()
 * @method string getReceiverTown()
 * @method string getReceiverId()
 * @method string getStatus()
 * @method string getType()
 * @method string getRefundStatus()
 * @method string getFlag()
 * @method string getSellerMemo()
 * @method string getBuyerMemo()
 * @method string getOpenSellerNick()
 * @method string getOpenBuyerNick()
 * @method string getOpenBuyerId()
 * @method string getCreateTime()
 * @method string getLogisticsPartnerCode()
 * @method string getLogisticsOrderNo()
 * @method string getRefWhsCode()
 * @method string getDeliveryTime()
 * @method string getLatestDeliveryTime()
 * @method ContentPropsModel getProps()
 * @method string getMark2()
 * @method string getBusinessType()
 * @method string getOrderSource()
 * @method string getDeliveryType()
 * @method string getConsolidateType()
 * @method string getPlatServiceFee()
 * @method LineModel[] getLines()
 * @method self setRefOid(string $refOid)
 * @method self setPosCode(string $posCode)
 * @method self setRefType(string $refType)
 * @method self setTotalFee(float $totalFee)
 * @method self setPayment(float $payment)
 * @method self setReceivedPayment(float $receivedPayment)
 * @method self setTotalPrice(float $totalPrice)
 * @method self setTotalSellPrice(float $totalSellPrice)
 * @method self setPostFee(float $postFee)
 * @method self setServiceFee(float $serviceFee)
 * @method self setDiscountFee(float $discountFee)
 * @method self setOrderTime(string $orderTime)
 * @method self setModifyTime(string $modifyTime)
 * @method self setPayTime(string $payTime)
 * @method self setShippingTime(string $shippingTime)
 * @method self setFinishTime(string $finishTime)
 * @method self setReceiverCountry(string $receiverCountry)
 * @method self setReceiverState(string $receiverState)
 * @method self setReceiverCity(string $receiverCity)
 * @method self setReceiverDistrict(string $receiverDistrict)
 * @method self setReceiverTown(string $receiverTown)
 * @method self setReceiverId(string $receiverId)
 * @method self setStatus(string $status)
 * @method self setType(string $type)
 * @method self setRefundStatus(string $refundStatus)
 * @method self setFlag(string $flag)
 * @method self setSellerMemo(string $sellerMemo)
 * @method self setBuyerMemo(string $buyerMemo)
 * @method self setOpenSellerNick(string $openSellerNick)
 * @method self setOpenBuyerNick(string $openBuyerNick)
 * @method self setOpenBuyerId(string $openBuyerId)
 * @method self setCreateTime(string $createTime)
 * @method self setLogisticsPartnerCode(string $logisticsPartnerCode)
 * @method self setLogisticsOrderNo(string $logisticsOrderNo)
 * @method self setRefWhsCode(string $refWhsCode)
 * @method self setDeliveryTime(string $deliveryTime)
 * @method self setLatestDeliveryTime(string $latestDeliveryTime)
 * @method self setProps(ContentPropsModel $props)
 * @method self setMark2(string $mark2)
 * @method self setBusinessType(string $businessType)
 * @method self setOrderSource(string $orderSource)
 * @method self setDeliveryType(string $deliveryType)
 * @method self setConsolidateType(string $consolidateType)
 * @method self setPlatServiceFee(string $platServiceFee)
 * @method self setLines(LineModel[] $lines)
 *
 */
class OrderContentModel extends BaseModel
{
    const RefTypeTB = 'TB';                                                        // 淘宝
    const RefTypeTMALL = 'TMALL';                                                  // 天猫
    const RefTypeJD = 'JD';                                                        // 京东pop店
    const RefTypePDD = 'PDD';                                                      // 拼多多三方店
    const RefTypeMP = 'MP';                                                        // 唯品会MP
    const RefTypeYZ = 'YZ';                                                        // 有赞
    const RefTypeDY = 'DY';                                                        // 抖音小店
    const RefTypeKS = 'KS';                                                        // 快手小店
    const RefTypeDPS = 'DPS';                                                      // 京东厂送
    const RefTypeKTT = 'KTT';                                                      // 拼多多快团团
    const RefTypeSN = 'SN';                                                        // 苏宁厂送
    const RefTypeYOUPIN = 'YOUPIN';                                                // 小米有品
    const RefTypeWM = 'WM';                                                        // 微盟微商城
    const RefTypeWM_ZHLS = 'WM_ZHLS';                                              // 微盟-智慧零售
    const RefTypeHW_MALL = 'HW_MALL';                                              // 华为商城
    const RefTypeXHS = 'XHS';                                                      // 小红书
    const RefTypeWD = 'WD';                                                        // 微店
    const RefTypeMap = [
        self::RefTypeTB      => '淘宝',
        self::RefTypeTMALL   => '天猫',
        self::RefTypeJD      => '京东pop店',
        self::RefTypePDD     => '拼多多三方店',
        self::RefTypeMP      => '唯品会MP',
        self::RefTypeYZ      => '有赞',
        self::RefTypeDY      => '抖音小店',
        self::RefTypeKS      => '快手小店',
        self::RefTypeDPS     => '京东厂送',
        self::RefTypeKTT     => '拼多多快团团',
        self::RefTypeSN      => '苏宁厂送',
        self::RefTypeYOUPIN  => '小米有品',
        self::RefTypeWM      => '微盟微商城',
        self::RefTypeWM_ZHLS => '微盟-智慧零售',
        self::RefTypeHW_MALL => '华为商城',
        self::RefTypeXHS     => '小红书',
        self::RefTypeWD      => '微店',
    ];
    // 订单状态类型
    const OrderStatusDeleted = 'DELETED';                                          // 已删除
    const OrderStatusClose = 'CLOSE';                                              // 已关闭
    const OrderStatusCancel = 'CANCEL';                                            // 已取消
    const OrderStatusUnknown = 'UNKNOWN';                                          // 未知
    const OrderStatusUnpaid = 'UNPAID';                                            // 未付款
    const OrderStatusPartPaid = 'PART_PAID';                                       // 部分付款
    const OrderStatusNotShipped = 'NOT_SHIPPED';                                   // 未发货
    const OrderStatusPartShipped = 'PART_SHIPPED';                                 // 部分发货
    const OrderStatusShipped = 'SHIPPED';                                          // 已发货
    const OrderStatusRejected = 'REJECTED';                                        // 已拒收
    const OrderStatusBillShipped = 'BILL_SHIPPED';                                 // 已寄票
    const OrderStatusBillComplete = 'BILL_COMPLETE';                               // 已收票
    const OrderStatusPause = 'PAUSE';                                              // 暂停
    const OrderStatusLocked = 'LOCKED';                                            // 锁定
    const OrderStatusComplete = 'COMPLETE';                                        // 已完成
    const OrderStatusMap = [
        self::OrderStatusDeleted      => '已删除',
        self::OrderStatusClose        => '已关闭',
        self::OrderStatusCancel       => '已取消',
        self::OrderStatusUnknown      => '未知',
        self::OrderStatusUnpaid       => '未付款',
        self::OrderStatusPartPaid     => '部分付款',
        self::OrderStatusNotShipped   => '未发货',
        self::OrderStatusPartShipped  => '部分发货',
        self::OrderStatusShipped      => '已发货',
        self::OrderStatusRejected     => '已拒收',
        self::OrderStatusBillShipped  => '已寄票',
        self::OrderStatusBillComplete => '已收票',
        self::OrderStatusPause        => '暂停',
        self::OrderStatusLocked       => '锁定',
        self::OrderStatusComplete     => '已完成',
    ];


    // 订单类型
    const OrderTypeSale = 'SALE';                                                  // 线上零售
    const OrderTypeWholesale = 'WHOLESALE';                                        // 批发订单
    const OrderTypeStore = 'STORE';                                                // 门店零售
    const OrderTypeDistribution = 'DISTRIBUTION';                                  // 线上分销
    const OrderTypeO2O = 'O2O';                                                    // O2O
    const OrderTypeMap = [
        self::OrderTypeSale         => '线上零售',
        self::OrderTypeWholesale    => '批发订单',
        self::OrderTypeStore        => '门店零售',
        self::OrderTypeDistribution => '线上分销',
        self::OrderTypeO2O          => 'O2O',
    ];


    // 售后状态类型
    const OrderRefundStatusNone = 'NONE';                                          // 未知
    const OrderRefundStatusNoRefund = 'NO_REFUND';                                 // 无退款
    const OrderRefundStatusPartRefunded = 'PART_REFUNDED';                         // 部分退款
    const OrderRefundStatusAllRefunded = 'ALL_REFUNDED';                           // 全部退款
    const RefundStatusMap = [
        self::OrderRefundStatusNone         => '未知',
        self::OrderRefundStatusNoRefund     => '无退款',
        self::OrderRefundStatusPartRefunded => '部分退款',
        self::OrderRefundStatusAllRefunded  => '全部退款',
    ];

    // 订单标记类型
    const OrderFlagNone = 'NONE';                                                  // 无
    const OrderFlagRed = 'RED';                                                    // 红
    const OrderFlagYellow = 'YELLOW';                                              // 黄
    const OrderFlagGreen = 'GREEN';                                                // 绿
    const OrderFlagBlue = 'BLUE';                                                  // 蓝
    const OrderFlagPurple = 'PURPLE';                                              // 紫
    const OrderFlagOrange = 'ORANGE';                                              // 橙
    const OrderFlagLightBlue = 'LIGHT_BLUE';                                       // 浅蓝
    const OrderFlagGrey = 'GREY';                                                  // 灰
    const OrderFlagMap = [
        self::OrderFlagNone      => '无',
        self::OrderFlagRed       => '红',
        self::OrderFlagYellow    => '黄',
        self::OrderFlagGreen     => '绿',
        self::OrderFlagBlue      => '蓝',
        self::OrderFlagPurple    => '紫',
        self::OrderFlagOrange    => '橙',
        self::OrderFlagLightBlue => '浅蓝',
        self::OrderFlagGrey      => '灰',
    ];


    // Mark2 标签类型
    const Mark2ThirdWarehouse = 'THIRD_WAREHOUSE';                                 // 平台仓订单
    const Mark2PartTransfer = 'PART_TRANSFER';                                     // 系统存在部分货品
    const Mark2ReceiverModified = 'RECEIVER_MODIFIED';                             // 收件人信息已修改
    const Mark2Gift = 'GIFT';                                                      // 赠品订单
    const Mark2NotClose = 'NOT_CLOSE';                                             // 不打烊订单
    const Mark2Yang = 'YANG';                                                      // 样品订单
    const Mark2Cheng = 'CHENG';                                                    // 同城配送订单
    const Mark2YiQing = 'YI_QING';                                                 // 未登记疫情的订单
    const Mark2Shun = 'SHUN';                                                      // 顺丰加价订单
    const Mark2You = 'YOU';                                                        // 补贴运费红包订单
    const Mark2Urgent = 'URGENT';                                                  // 加急订单
    const Mark2Prescription = 'PRESCRIPTION';                                      // 处方订单
    const Mark2Exception = 'EXCEPTION';                                            // 异常订单
    const Mark2ShiYong = 'SHI_YONG';                                               // 先试后付
    const Mark2AdvancedLogistics = 'ADVANCED_LOGISTICS';                           // 物流服务升级
    const Mark2JingPei = 'JING_PEI';                                               // 京配订单
    const Mark2SelfDelivery = 'SELF_DELIVERY';                                     // O2O自配送订单
    const Mark2JiYun = 'JI_YUN';                                                   // 集运订单
    const Mark2Ming = 'MING';                                                      // 过敏包退
    const Mark2Jian = 'JIAN';                                                      // 专业鉴定
    const Mark2DelayedShipment = 'DELAYED_SHIPMENT';                               // 发货时间可延迟
    const Mark2KuaJing = 'KUA_JING';                                               // 跨境全托管发货单
    const Mark2ZiTi = 'ZI_TI';                                                     // 自提订单
    const Mark2ZanTing = 'ZAN_TING';                                               // 暂停发货
    const Mark2PriorityDeliver = 'PRIORITY_DELIVER';                               // 优先发货
    const Mark2Aox = 'AOX';                                                        // 翱象
    const Mark2ShunYou = 'SHUN_YOU';                                               // 顺丰包邮
    const Mark2Pei = 'PEI';                                                        // 晚发赔
    const Mark2Que = 'QUE';                                                        // 订单缺货
    const Mark2Qic = 'QIC';                                                        // 抖音质检
    const Mark2Reissue = 'REISSUE';                                                // 补发订单
    const Mark2ZhiYou = 'ZHI_YOU';                                                 // 直邮活动
    const Mark2PlatformCarrier = 'PLATFORM_CARRIER';                               // 平台承运订单
    const Mark2Di = 'DI';                                                          // 指定快递
    const Mark2Map = [
        self::Mark2ThirdWarehouse    => '平台仓订单',
        self::Mark2PartTransfer      => '系统存在部分货品',
        self::Mark2ReceiverModified  => '收件人信息已修改',
        self::Mark2Gift              => '赠品订单',
        self::Mark2NotClose          => '不打烊订单',
        self::Mark2Yang              => '样品订单',
        self::Mark2Cheng             => '同城配送订单',
        self::Mark2YiQing            => '未登记疫情的订单',
        self::Mark2Shun              => '顺丰加价订单',
        self::Mark2You               => '补贴运费红包订单',
        self::Mark2Urgent            => '加急订单',
        self::Mark2Prescription      => '处方订单',
        self::Mark2Exception         => '异常订单',
        self::Mark2ShiYong           => '先试后付',
        self::Mark2AdvancedLogistics => '物流服务升级',
        self::Mark2JingPei           => '京配订单',
        self::Mark2SelfDelivery      => 'O2O自配送订单',
        self::Mark2JiYun             => '集运订单',
        self::Mark2Ming              => '过敏包退',
        self::Mark2Jian              => '专业鉴定',
        self::Mark2DelayedShipment   => '发货时间可延迟',
        self::Mark2KuaJing           => '跨境全托管发货单',
        self::Mark2ZiTi              => '自提订单',
        self::Mark2ZanTing           => '暂停发货',
        self::Mark2PriorityDeliver   => '优先发货',
        self::Mark2Aox               => '翱象',
        self::Mark2ShunYou           => '顺丰包邮',
        self::Mark2Pei               => '晚发赔',
        self::Mark2Que               => '订单缺货',
        self::Mark2Qic               => '抖音质检',
        self::Mark2Reissue           => '补发订单',
        self::Mark2ZhiYou            => '直邮活动',
        self::Mark2PlatformCarrier   => '平台承运订单',
        self::Mark2Di                => '指定快递',
    ];

    // BusinessType 类型
    const BusinessTypeGuarantee = 'GUARANTEE';                                     // 担保交易
    const BusinessTypeGuaranteeCashOnDelivery = 'GUARANTEE_CASH_ON_DELIVERY';      // 担保交易货到付款
    const BusinessTypeCashAfterDelivery = 'CASH_AFTER_DELIVERY';                   // 先款后货
    const BusinessTypeCashOnDelivery = 'CASH_ON_DELIVERY';                         // 货到付款
    const BusinessTypeDepositAndTail = 'DEPOSIT_AND_TAIL';                         // 定金+尾款
    const BusinessTypeCashAndCarry = 'CASH_AND_CARRY';                             // 现款现货
    const BusinessTypeAccountPeriod = 'ACCOUNT_PERIOD';                            // 预收信用
    const BusinessTypeETicket = 'ETICKET';                                         // 阿里新零售定金
    const BusinessTypeO2O = 'O2O';                                                 // O2O
    const BusinessTypeReceipt = 'RECEIPT';                                         // 小额收款
    const BusinessTypeMap = [
        self::BusinessTypeGuarantee               => '担保交易',
        self::BusinessTypeGuaranteeCashOnDelivery => '担保交易货到付款',
        self::BusinessTypeCashAfterDelivery       => '先款后货',
        self::BusinessTypeCashOnDelivery          => '货到付款',
        self::BusinessTypeDepositAndTail          => '定金+尾款',
        self::BusinessTypeCashAndCarry            => '现款现货',
        self::BusinessTypeAccountPeriod           => '预收信用',
        self::BusinessTypeETicket                 => '阿里新零售定金',
        self::BusinessTypeO2O                     => 'O2O',
        self::BusinessTypeReceipt                 => '小额收款',
    ];


    // OrderSource 类型
    const OrderSourceSync = 'SYNC';                                                // 接口同步
    const OrderSourceManual = 'MANUAL';                                            // 手动建单
    const OrderSourceMap = [
        self::OrderSourceSync   => '接口同步',
        self::OrderSourceManual => '手动建单',
    ];

    // DeliveryType 类型
    const DeliveryTypeNone = 'NONE';                                               // 未知
    const DeliveryTypeOnline = 'ONLINE';                                           // 在线发货
    const DeliveryTypeOffline = 'OFFLINE';                                         // 线下发货
    const DeliveryTypeDummy = 'DUMMY';                                             // 虚拟发货
    const DeliveryTypeJiaZhuang = 'JIA_ZHUANG';                                    // 家装发货
    const DeliveryTypeCustomerPick = 'CUSTOMER_PICK';                              // 客户自提
    const DeliveryTypeMap = [
        self::DeliveryTypeNone         => '未知',
        self::DeliveryTypeOnline       => '在线发货',
        self::DeliveryTypeOffline       => '线下发货',
        self::DeliveryTypeDummy        => '虚拟发货',
        self::DeliveryTypeJiaZhuang    => '家装发货',
        self::DeliveryTypeCustomerPick => '客户自提',
    ];

    /**
     * 订单id
     * @var string|null
     */
    public ?string $refOid = null;

    /**
     * 店铺编码
     * @var string|null
     */
    public ?string $posCode = null;

    /**
     * 平台类型
     * @see  self::RefTypeMap
     * @var string|null
     */
    public ?string $refType = null;

    /**
     * 应收金额
     * @var float|null
     */
    public ?float $totalFee = null;

    /**
     * 实付金额
     * @var float|null
     */
    public ?float $payment = null;

    /**
     * 实收金额
     * @var float|null
     */
    public ?float $receivedPayment = null;

    /**
     * 原价合计
     * @var float|null
     */
    public ?float $totalPrice = null;

    /**
     * 售价合计
     * @var float|null
     */
    public ?float $totalSellPrice = null;

    /**
     * 快递费用；包邮则是0
     * @var float|null
     */
    public ?float $postFee = null;

    /**
     * 服务费
     * @var float|null
     */
    public ?float $serviceFee = null;

    /**
     * 优惠金额
     * @var float|null
     */
    public ?float $discountFee = null;

    /**
     * 下单时间
     * @var string|null
     */
    public ?string $orderTime = null;

    /**
     * 修改时间
     * @var string|null
     */
    public ?string $modifyTime = null;

    /**
     * 支付时间
     * @var string|null
     */
    public ?string $payTime = null;

    /**
     * 发货时间
     * @var string|null
     */
    public ?string $shippingTime = null;

    /**
     * 完成时间
     * @var string|null
     */
    public ?string $finishTime = null;

    /**
     * 收件人国家
     * @var string|null
     */
    public ?string $receiverCountry = null;

    /**
     * 收件人省
     * @var string|null
     */
    public ?string $receiverState = null;

    /**
     * 收件人市
     * @var string|null
     */
    public ?string $receiverCity = null;

    /**
     * 收件人区/县
     * @var string|null
     */
    public ?string $receiverDistrict = null;

    /**
     * 收件人镇
     * @var string|null
     */
    public ?string $receiverTown = null;

    /**
     * 收货人 ID，用于判断是否为同一个收货人
     * @var string|null
     */
    public ?string $receiverId = null;

    /**
     * @see self::OrderStatusMap
     * 订单状态：（DELETED-已删除,CLOSE-已关闭,CANCEL-已取消,UNKNOWN-未知,UNPAID-未付款),
     * PART_PAID-部分付款,NOT_SHIPPED-未发货,PART_SHIPPED-部分发货,SHIPPED-已发货),
     * REJECTED-已拒收,BILL_SHIPPED-已寄票,BILL_COMPLETE-已收票,PAUSE-暂停,LOCKED-锁定,
     * COMPLETE-已完成）
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @see self::OrderTypeMap
     * @var string|null
     */
    public ?string $type = null;

    /**
     * 订单售后状态：（NONE-未知,NO_REFUND-无退款,PART_REFUNDED-部分退款,ALL_REFUNDED-全部退款）
     * @see self::RefundStatusMap
     * @var string|null
     */
    public ?string $refundStatus = null;

    /**
     * @see self::OrderFlagMap
     * @var string|null
     */
    public ?string $flag = null;

    /**
     * 卖家备注
     * @var string|null
     */
    public ?string $sellerMemo = null;

    /**
     * 买家留言
     * @var string|null
     */
    public ?string $buyerMemo = null;

    /**
     * 卖家昵称（淘宝平台返回）
     * @var string|null
     */
    public ?string $openSellerNick = null;

    /**
     * 买家昵称（淘宝平台返回）
     * @var string|null
     */
    public ?string $openBuyerNick = null;

    /**
     * 平台买家 ID
     * @var string|null
     */
    public ?string $openBuyerId = null;

    /**
     * 创建时间
     * @var string|null
     */
    public ?string $createTime = null;

    /**
     * 商家物流编码
     * @var string|null
     */
    public ?string $logisticsPartnerCode = null;

    /**
     * 物流单号
     * @var string|null
     */
    public ?string $logisticsOrderNo = null;

    /**
     * 平台仓库编码
     * @var string|null
     */
    public ?string $refWhsCode = null;

    /**
     * 预计发货时间/预约发货时间
     * 类型：时间戳；业务：由买家指定的某个时间
     * @var string|null
     */
    public ?string $deliveryTime = null;

    /**
     * 最晚发货时间
     * 类型：时间戳；业务：平台或卖家定义的承诺最晚发货时间
     * @var string|null
     */
    public ?string $latestDeliveryTime = null;

    /**
     * 订单其他属性，可能为null
     * @var ContentPropsModel|null
     */
    public ?ContentPropsModel $props = null;

    /**
     * 标记
     * @see self::Mark2Map
     * @var array|null
     */
    public ?array $mark2 = null;

    /**
     * 交易类型
     * @see self::BusinessTypeMap
     * @var string|null
     */
    public ?string $businessType = null;

    /**
     * 订单来源
     * @see  self::OrderSourceMap
     * @var string|null
     */
    public ?string $orderSource = null;

    /**
     * 发货方式
     * @see  self::DeliveryTypeMap
     * @var string|null
     */
    public ?string $deliveryType = null;

    /**
     * 集运类型
     * @var string|null
     */
    public ?string $consolidateType = null;

    /**
     * 平台服务费
     * @var string|null
     */
    public ?string $platServiceFee = null;

    /**
     * 订单货品详情
     * @var LineModel[] | null
     */
    public ?array $lines = null;

}
