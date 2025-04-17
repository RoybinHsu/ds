<?php

namespace ds\responses;

use ds\BaseModel;
use ds\models\PosSkuQueryContent;

/**
 * @method array getContent()
 * @method bool getHasNext()
 * @method self setContent(array $content)
 * @method self setHasNext(bool $hasNext)
 */
class PosSkuQueryResponse extends BaseModel
{
    /**
     * 商品内容
     * @var PosSkuQueryContent[]|null
     */
    public ?array $content = null;

    /**
     * 是否有下一页； true:有，false:无
     * @var bool|null
     */
    public ?bool $hasNext = null;

}
