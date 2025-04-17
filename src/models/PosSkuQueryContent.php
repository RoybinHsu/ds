<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method int|null getId()
 * @method self setId(int $id)
 * @method string|null getRefSpuId()
 * @method self setRefSpuId(string $refSpuId)
 * @method string|null getRefSkuId()
 * @method self setRefSkuId(string $refSkuId)
 * @method string|null getStatus()
 * @method self setStatus(string $status)
 * @method string|null getOuterId()
 * @method self setOuterId(string $outerId)
 * @method string|null getTitle()
 * @method self setTitle(string $title)
 * @method string|null getBarcode()
 * @method self setBarcode(string $barcode)
 * @method string|null getStandards()
 * @method self setStandards(string $standards)
 * @method string|null getCid()
 * @method self setCid(string $cid)
 * @method string|null getPrice()
 * @method self setPrice(string $price)
 * @method int|null getNum()
 * @method self setNum(int $num)
 * @method string|null getMatchStatus()
 * @method self setMatchStatus(string $matchStatus)
 * @method string|null getMatchType()
 * @method self setMatchType(string $matchType)
 * @method int|null getSkuId()
 * @method self setSkuId(int $skuId)
 * @method int|null getProductId()
 * @method self setProductId(int $productId)
 * @method string|null getPicUrl()
 * @method self setPicUrl(string $picUrl)
 * @method string|null getUrl()
 * @method self setUrl(string $url)
 * @method string|null getSyncErrMsg()
 * @method self setSyncErrMsg(string $syncErrMsg)
 * @method string|null getSysOuterId()
 * @method self setSysOuterId(string $sysOuterId)
 * @method string|null getCreateTime()
 * @method self setCreateTime(string $createTime)
 * @method string|null getUpdateTime()
 * @method self setUpdateTime(string $updateTime)
 * @method string|null getRefPlatform()
 * @method self setRefPlatform(string $refPlatform)
 * @method string|null getThirdSkuType()
 * @method self setThirdSkuType(string $thirdSkuType)
 * @method string|null getRefType()
 * @method self setRefType(string $refType)
 * @method string|null getMarketType()
 * @method self setMarketType(string $marketType)
 * @method string|null getRefBrandName()
 * @method self setRefBrandName(string $refBrandName)
 * @method string|null getRefSourceId()
 * @method self setRefSourceId(string $refSourceId)
 * @method string|null getRefSourceCode()
 * @method self setRefSourceCode(string $refSourceCode)
 * @method string|null getGroupPrice()
 * @method self setGroupPrice(string $groupPrice)
 * @method string|null getInputStr()
 * @method self setInputStr(string $inputStr)
 */
class PosSkuQueryContent extends BaseModel
{
    /**
     * 店铺商品ID
     * @var int|null
     */
    public ?int $id = null;

    /**
     * 平台spuId
     * @var string|null
     */
    public ?string $refSpuId = null;

    /**
     * 平台skuId
     * @var string|null
     */
    public ?string $refSkuId = null;

    /**
     * 平台sku状态
     * @var string|null
     */
    public ?string $status = null;

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
     * 条码
     * @var string|null
     */
    public ?string $barcode = null;

    /**
     * sku规格属性
     * @var string|null
     */
    public ?string $standards = null;

    /**
     * 平台类型id
     * @var string|null
     */
    public ?string $cid = null;

    /**
     * sku销售价格
     * @var string|null
     */
    public ?string $price = null;

    /**
     * sku数量
     * @var int|null
     */
    public ?int $num = null;

    /**
     * 匹配状态
     * @var string|null
     */
    public ?string $matchStatus = null;

    /**
     * 匹配方式
     * @var string|null
     */
    public ?string $matchType = null;

    /**
     * 系统skuId
     * @var int|null
     */
    public ?int $skuId = null;

    /**
     * 系统SpuId
     * @var int|null
     */
    public ?int $productId = null;

    /**
     * 平台商品图片地址
     * @var string|null
     */
    public ?string $picUrl = null;

    /**
     * 平台商品链接地址
     * @var string|null
     */
    public ?string $url = null;

    /**
     * 同步错误消息
     * @var string|null
     */
    public ?string $syncErrMsg = null;

    /**
     * 系统SKU编码
     * @var string|null
     */
    public ?string $sysOuterId = null;

    /**
     * 创建时间
     * @var string|null
     */
    public ?string $createTime = null;

    /**
     * 修改时间
     * @var string|null
     */
    public ?string $updateTime = null;

    /**
     * 店铺平台类型
     * @var string|null
     */
    public ?string $refPlatform = null;

    /**
     * 店铺商品类型
     * @var string|null
     */
    public ?string $thirdSkuType = null;

    /**
     * 应用类型
     * @var string|null
     */
    public ?string $refType = null;

    /**
     * 货品销售类型
     * @var string|null
     */
    public ?string $marketType = null;

    /**
     * 平台品牌名称
     * @var string|null
     */
    public ?string $refBrandName = null;

    /**
     * 来源ID
     * @var string|null
     */
    public ?string $refSourceId = null;

    /**
     * 来源编码
     * @var string|null
     */
    public ?string $refSourceCode = null;

    /**
     * 团购价
     * @var string|null
     */
    public ?string $groupPrice = null;

    /**
     * 用户自行输入的子属性名和属性值
     * @var string|null
     */
    public ?string $inputStr = null;
}
