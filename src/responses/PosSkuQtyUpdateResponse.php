<?php

namespace ds\responses;

use ds\BaseModel;
use ds\models\PosSkuQtyUpdateResponseContent;

class PosSkuQtyUpdateResponse extends BaseModel
{
    /**
     * 店铺商品修改结果
     * @var PosSkuQtyUpdateResponseContent|null
     */
    public ?PosSkuQtyUpdateResponseContent $content = null;


}
