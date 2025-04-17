<?php

namespace ds\responses;

use ds\BaseModel;
use ds\models\PosSkuQtyUpdateContent;

class PosSkuQtyUpdateResponse extends BaseModel
{
    /**
     * 店铺商品修改结果
     * @var PosSkuQtyUpdateContent|null
     */
    public ?PosSkuQtyUpdateContent $content = null;


}
