<?php

namespace ds\models;

use ds\BaseModel;

/**
 *
 * @method string getPosCode()
 * @method string getOuterIds()
 * @method int getPageNo()
 * @method int getPageSize()
 * @method string getRefSpuIds()
 * @method string getRefSkuIds()
 *
 *
 */
class PosSkuQueryModel extends BaseModel
{
    /**
     * 店铺编码
     *
     * @var string|null
     */
    public ?string $posCode = null;

    /**
     * 平台商品的商家编码,多个使用,分割，不能超过50
     *
     * @var string|null
     */
    public ?string $outerIds = null;

    /**
     * 当前页面, 不填写则为1
     *
     * @var int|null
     */
    public ?int $pageNo = null;

    /**
     * 页面大小, 不填写则为100
     *
     * @var int|null
     */
    public ?int $pageSize = null;

    /**
     * 平台商品的spuId,多个使用,分割，不能超过50
     *
     * @var string|null
     */
    public ?string $refSpuIds = null;

    /**
     * 平台商品的skuId,多个使用,分割，不能超过50
     *
     * @var string|null
     */
    public ?string $refSkuIds = null;

}
