<?php

namespace ds\models;

use ds\BaseModel;

/**
 *
 * @method int getId()
 * @method int getNum()
 * @method string getSaleStatus()
 * @method string getWhsCode()
 * @method self setId(int $id)
 * @method self setNum(int $num)
 * @method self setSaleStatus(string $saleStatus)
 * @method self setWhsCode(string $whsCode)
 *
 */
class PosSkuQtyUpdateModel extends BaseModel
{

    /**
     * 店铺商品Id
     *
     * @var int|null
     */
    public ?int $id = null;

    /**
     * 库存数量
     *
     * @var int|null
     */
    public ?int $num = null;

    /**
     * 上下架状态，用于修改库存后需要上架的场景 on-上架 off-下架
     *
     * @var string|null
     */
    public ?string $saleStatus = null;

    /**
     * 仓库code或者门店id，目前用于天猫货品库存商家端调整
     *
     * @var string|null
     */
    public ?string $whsCode = null;
}
