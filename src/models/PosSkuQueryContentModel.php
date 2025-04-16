<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method int getId()
 * @method string getRefSpuId()
 * @method string|null getRefSkuId()
 * @method string|null getStatus()
 * @method string|null getOuterId()
 * @method string|null getTitle()
 * @method string|null getBarcode()
 * @method string|null getStandards()
 * @method string|null getCid()
 * @method string|null getPrice()
 * @method int|null getNum()
 * @method string|null getMatchStatus()
 * @method string|null getMatchType()
 * @method int|null getSkuId()
 * @method int|null getProductId()
 * @method string|null getPicUrl()
 * @method string|null getUrl()
 * @method string|null getSyncErrMsg()
 * @method string|null getSysOuterId()
 * @method string|null getCreateTime()
 * @method string|null getUpdateTime()
 * @method string|null getRefPlatform()
 * @method string|null getThirdSkuType()
 * @method string|null getRefType()
 * @method string|null getMarketType()
 * @method string|null getRefBrandName()
 * @method string|null getRefSourceId()
 * @method string|null getRefSourceCode()
 * @method string|null getGroupPrice()
 * @method string|null getInputStr()
 * @method self setId(int $id)
 * @method self setRefSpuId(string $refSpuId)
 * @method self setRefSkuId(string $refSkuId)
 * @method self setStatus(string $status)
 * @method self setOuterId(string $outerId)
 * @method self setTitle(string $title)
 * @method self setBarcode(string $barcode)
 * @method self setStandards(string $standards)
 * @method self setCid(string $cid)
 * @method self setPrice(string $price)
 * @method self setNum(int $num)
 * @method self setMatchStatus(string $matchStatus)
 * @method self setMatchType(string $matchType)
 * @method self setSkuId(int $skuId)
 * @method self setProductId(int $productId)
 * @method self setPicUrl(string $picUrl)
 * @method self setUrl(string $url)
 * @method self setSyncErrMsg(string $syncErrMsg)
 * @method self setSysOuterId(string $sysOuterId)
 * @method self setCreateTime(string $createTime)
 * @method self setUpdateTime(string $updateTime)
 * @method self setRefPlatform(string $refPlatform)
 * @method self setThirdSkuType(string $thirdSkuType)
 * @method self setRefType(string $refType)
 * @method self setMarketType(string $marketType)
 * @method self setRefBrandName(string $refBrandName)
 * @method self setRefSourceId(string $refSourceId)
 * @method self setRefSourceCode(string $refSourceCode)
 * @method self setGroupPrice(string $groupPrice)
 * @method self setInputStr(string $inputStr)
 */
class PosSkuQueryContentModel extends BaseModel
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
     * 来源ID：店铺Id|仓库Id
     * @var string|null
     */
    public ?string $refSourceId = null;

    /**
     * 来源编码：店铺编码|仓库编码
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
