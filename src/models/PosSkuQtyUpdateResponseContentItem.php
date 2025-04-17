<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method string getId()
 * @method string getThirdSkuId()
 * @method string getSyncStatus()
 * @method string getSyncMsg()
 * @method self setId(string $id)
 * @method self setThirdSkuId(string $thirdSkuId)
 * @method self setSyncStatus(string $syncStatus)
 * @method self setSyncMsg(string $syncMsg)
 */
class PosSkuQtyUpdateResponseContentItem extends BaseModel
{
    /**
     * 修改id
     * @var string|null
     */
    public ?string $id = null;

    /**
     * 三方商品ID
     * @var string|null
     */
    public ?string $thirdSkuId = null;

    /**
     * 处理状态
     * @var string|null
     */
    public ?string $syncStatus = null;

    /**
     * 错误信息
     * @var string|null
     */
    public ?string $syncMsg = null;
}
