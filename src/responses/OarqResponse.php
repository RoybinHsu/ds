<?php

namespace ds\responses;

use ds\BaseModel;
use ds\models\OarqModel;

class OarqResponse extends BaseModel
{
    /**
     * 售后结果
     * @var OarqModel|null
     */
    public ?OarqModel $content = null;

    /**
     * 是否有下一页； true:有，false:无
     * @var bool|null
     */
    public ?bool $hasNext = null;

}
