<?php

namespace ds\responses;

use ds\BaseModel;
use ds\models\OrderContentModel;

/**
 * @method OrderContentModel getContent()
 * @method bool getHasNext()
 * @method self setContent(OrderContentModel $content)
 * @method self setHasNext(bool $hasNext)
 */
class OrderQueryResponse extends BaseModel
{
    /**
     *
     * @var OrderContentModel[]|null
     */
    public ?array $content = null;

    /**
     * 是否有下一页； true:有，false:无
     * @var bool|null
     */
    public ?bool $hasNext = null;
}
