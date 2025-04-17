<?php

namespace ds\responses;

use ds\BaseModel;
use ds\models\OarqModel;
use ds\models\OrderContentModel;

class OarqResponse extends BaseModel
{
    /**
     * 售后结果
     * @var OrderContentModel|null
     */
    public ?OrderContentModel $content = null;

    /**
     * 是否有下一页； true:有，false:无
     * @var bool|null
     */
    public ?bool $hasNext = null;

}
