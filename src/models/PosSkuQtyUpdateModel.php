<?php

namespace ds\models;

use ds\BaseModel;

class PosSkuQtyUpdateModel extends BaseModel
{

    /**
     * 更新库存请求参数model
     * @var PosSkuQtyUpdateContent[] |null
     */
    public ?array $content = null;
}
