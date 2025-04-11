<?php

namespace ds\models;

use ds\BaseModel;

/**
 * 订单其他属性
 * @method string getAuthorId()
 * @method string getAuthorName()
 * @method string getTcOrderId()
 * @method string getDsUserCode()
 * @method string getDsUserName()
 * @method string getDeliveryDoorType()
 * @method string getOutPlatform()
 * @method string getOutWaybillType()
 * @method string getUseGovSubsidy()
 * @method string getGovSubsidyAmount()
 * @method string getPayType()
 * @method string getLogisticsServiceMsg()
 * @method string getLogisticsServicePros()
 * @method string getNeedBindSnCode()
 * @method string getNeedUploadSnCode()
 * @method string getEstReviewTime()
 * @method string getGiverName()
 * @method string getReceiverName()
 * @method string getGreetingMessage()
 * @method self setAuthorId(string $authorId)
 * @method self setAuthorName(string $authorName)
 * @method self setTcOrderId(string $tcOrderId)
 * @method self setDsUserCode(string $dsUserCode)
 * @method self setDsUserName(string $dsUserName)
 * @method self setDeliveryDoorType(string $deliveryDoorType)
 * @method self setOutPlatform(string $outPlatform)
 * @method self setOutWaybillType(string $outWaybillType)
 * @method self setUseGovSubsidy(string $useGovSubsidy)
 * @method self setGovSubsidyAmount(string $govSubsidyAmount)
 * @method self setPayType(string $payType)
 * @method self setLogisticsServiceMsg(string $logisticsServiceMsg)
 * @method self setLogisticsServicePros(string $logisticsServicePros)
 * @method self setNeedBindSnCode(string $needBindSnCode)
 * @method self setNeedUploadSnCode(string $needUploadSnCode)
 * @method self setEstReviewTime(string $estReviewTime)
 * @method self setGiverName(string $giverName)
 * @method self setReceiverName(string $receiverName)
 * @method self setGreetingMessage(string $greetingMessage)
 * @method self setLogisticList(LogisticListModel[] $logisticList)
 * @method LogisticListModel[] getLogisticList()
 */
class ContentPropsModel extends BaseModel
{

    // 分销平台类型
    const OutPlatformTB = 'TB';                                               // 淘宝
    const OutPlatformTMALL = 'TMALL';                                         // 天猫
    const OutPlatformJD = 'JD';                                               // 京东pop店
    const OutPlatformPDD = 'PDD';                                             // 拼多多三方店
    const OutPlatformMP = 'MP';                                               // 唯品会MP
    const OutPlatformYZ = 'YZ';                                               // 有赞
    const OutPlatformDY = 'DY';                                               // 抖音小店
    const OutPlatformKS = 'KS';                                               // 快手小店
    const OutPlatformDPS = 'DPS';                                             // 京东厂送
    const OutPlatformKTT = 'KTT';                                             // 拼多多快团团
    const OutPlatformSN = 'SN';                                               // 苏宁厂送
    const OutPlatformYOUPIN = 'YOUPIN';                                       // 小米有品
    const OutPlatformWM = 'WM';                                               // 微盟微商城
    const OutPlatformWM_ZHLS = 'WM_ZHLS';                                     // 微盟-智慧零售
    const OutPlatformHW_MALL = 'HW_MALL';                                     // 华为商城
    const OutPlatformXHS = 'XHS';                                             // 小红书
    const OutPlatformWD = 'WD';                                               // 微店
    const OutPlatformMap = [
        self::OutPlatformTB      => '淘宝',
        self::OutPlatformTMALL   => '天猫',
        self::OutPlatformJD      => '京东pop店',
        self::OutPlatformPDD     => '拼多多三方店',
        self::OutPlatformMP      => '唯品会MP',
        self::OutPlatformYZ      => '有赞',
        self::OutPlatformDY      => '抖音小店',
        self::OutPlatformKS      => '快手小店',
        self::OutPlatformDPS     => '京东厂送',
        self::OutPlatformKTT     => '拼多多快团团',
        self::OutPlatformSN      => '苏宁厂送',
        self::OutPlatformYOUPIN  => '小米有品',
        self::OutPlatformWM      => '微盟微商城',
        self::OutPlatformWM_ZHLS => '微盟-智慧零售',
        self::OutPlatformHW_MALL => '华为商城',
        self::OutPlatformXHS     => '小红书',
        self::OutPlatformWD      => '微店',
    ];

    // 分销标签平台类型
    const OutWaybillTypeWB_TB = 'WB_TB';                                      // 淘宝菜鸟
    const OutWaybillTypeWB_JD_ALPHA = 'WB_JD_ALPHA';                          // 京东无界，仅用于电子面单场景，打印模板相关使用：WB_JD_YUN
    const OutWaybillTypeWB_JD_ETMS = 'WB_JD_ETMS';                            // 京东快递，仅用于电子面单场景，打印模板相关使用：WB_JD_YUN
    const OutWaybillTypeWB_PDD = 'WB_PDD';                                    // 拼多多
    const OutWaybillTypeWB_DY = 'WB_DY';                                      // 抖音
    const OutWaybillTypeWB_VIP = 'WB_VIP';                                    // 唯品会
    const OutWaybillTypeWB_KS = 'WB_KS';                                      // 快手
    const OutWaybillTypeWB_JD_YUN = 'WB_JD_YUN';                              // 仅用于打印模板的查询和返回值中，不能用于电子面单
    const OutWaybillTypeMap = [
        self::OutWaybillTypeWB_TB       => '淘宝菜鸟',
        self::OutWaybillTypeWB_JD_ALPHA => '京东无界，仅用于电子面单场景，打印模板相关使用：WB_JD_YUN',
        self::OutWaybillTypeWB_JD_ETMS  => '京东快递，仅用于电子面单场景，打印模板相关使用：WB_JD_YUN',
        self::OutWaybillTypeWB_PDD      => '拼多多',
        self::OutWaybillTypeWB_DY       => '抖音',
        self::OutWaybillTypeWB_VIP      => '唯品会',
        self::OutWaybillTypeWB_KS       => '快手',
        self::OutWaybillTypeWB_JD_YUN   => '仅用于打印模板的查询和返回值中，不能用于电子面单',
    ];

    /**
     * 达人 ID 或官方主播 ID
     * @var string|null
     */
    public ?string $authorId = null;

    /**
     * 达人名称/官方主播名称
     * @var string|null
     */
    public ?string $authorName = null;

    /**
     * 消费者交易单号（当原始订单为商家与中间商的交易时有值）
     * @var string|null
     */
    public ?string $tcOrderId = null;

    /**
     * 代发商家编码
     * @var string|null
     */
    public ?string $dsUserCode = null;

    /**
     * 代发商家名称
     * @var string|null
     */
    public ?string $dsUserName = null;

    /**
     * 送货上门服务类型
     * @var string|null
     */
    public ?string $deliveryDoorType = null;

    /**
     * 分销平台
     * @see self::OutPlatformMap
     * @var string|null
     */
    public ?string $outPlatform = null;

    /**
     * 分销面单平台
     * @see self::OutWaybillTypeMap
     * @var string|null
     */
    public ?string $outWaybillType = null;

    /**
     * 是否使用政府补贴（1-是）
     * @var string|null
     */
    public ?string $useGovSubsidy = null;

    /**
     * 政府补贴金额，单位元
     * @var string|null
     */
    public ?string $govSubsidyAmount = null;

    /**
     * 支付方式
     * @var string|null
     */
    public ?string $payType = null;

     /**
     * 物流服务标签
     * @var string|null
     */
    public ?string $logisticsServiceMsg = null;

     /**
     * 物流服务属性
     * @var string|null
     */
    public ?string $logisticsServicePros = null;

     /**
     * 是否需要绑定 SN 码
     * @var string|null
     */
    public ?string $needBindSnCode = null;

    /**
     * 是否需要上传 SN 码
     * @var string|null
     */
    public ?string $needUploadSnCode = null;

    /**
     * 预计审核时间（目前仅拼多多）
     * @var string|null
     */
    public ?string $estReviewTime = null;

     /**
     * 贺卡落款（目前仅微信小店）
     * @var string|null
     */
    public ?string $giverName = null;

    /**
     * 贺卡称谓（目前仅微信小店）
     * @var string|null
     */
    public ?string $receiverName = null;

     /**
     * 贺卡内容（目前仅微信小店）
     * @var string|null
     */
    public ?string $greetingMessage = null;

    /**
     *
     * @var LogisticListModel[]|null
     */
    public ?array $logisticList = null;

}
