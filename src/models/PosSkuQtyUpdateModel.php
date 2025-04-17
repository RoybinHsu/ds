<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method PosSkuQtyUpdateContent[] |null  getContent()
 * @method self setContent(PosSkuQtyUpdateContent[] | null $content)
 */
class PosSkuQtyUpdateModel extends BaseModel
{

    /**
     * 更新库存请求参数model
     * @var PosSkuQtyUpdateContent[] |null
     */
    public ?array $content = null;
}
