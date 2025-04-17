<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method string getUpdateBatch()
 * @method PosSkuQtyUpdateContentItem[] getItems()
 * @method self setUpdateBatch(string $updateBatch)
 * @method self setItems(PosSkuQtyUpdateContentItem[] $items)
 */
class PosSkuQtyUpdateContent extends BaseModel
{
    /**
     * 修改批次
     * @var string|null
     */
    public ?string $updateBatch = null;
    /**
     * 条目
     * @var PosSkuQtyUpdateContentItem[]|null
     */
    public ?array $items = null;
}
