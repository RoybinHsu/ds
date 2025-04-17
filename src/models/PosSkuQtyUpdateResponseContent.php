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
class PosSkuQtyUpdateResponseContent extends BaseModel
{
    /**
     * 修改批次
     * @var string|null
     */
    public ?string $updateBatch = null;

    /**
     *
     * @var PosSkuQtyUpdateResponseContentItem[]|null
     */
    public ?array $items = null;

}
