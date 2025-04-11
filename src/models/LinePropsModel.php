<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method SerialInfoModel[] getSerialInfo()
 * @method string getBizDeliveryType()
 * @method string getBizDeliveryCode()
 * @method string getBlackDeliveryCps()
 * @method string getWhiteDeliveryCps()
 * @method self setSerialInfo(SerialInfoModel[] $serialInfo)
 * @method self setBizDeliveryType(string $bizDeliveryType)
 * @method self setBizDeliveryCode(string $bizDeliveryCode)
 * @method self setBlackDeliveryCps(string $blackDeliveryCps)
 * @method self setWhiteDeliveryCps(string $whiteDeliveryCps)
 */
class LinePropsModel extends BaseModel
{

    /**
     * 发货SN/IMEI信息
     * @var SerialInfoModel[]|null
     */
    public ?array $serialInfo = null;

    /**
     * 建议配类型
     * @var string|null
     */
    public ?string $bizDeliveryType = null;

    /**
     * 推荐 ERP 商家配编码列表（多个配编码用","分隔）
     * @var string|null
     */
    public ?string $bizDeliveryCode = null;

    /**
     * 禁用平台配编码列表
     * @var string|null
     */
    public ?string $blackDeliveryCps = null;

    /**
     * 推荐平台配编码列表
     * @var string|null
     */
    public ?string $whiteDeliveryCps = null;

}
