<?php

namespace ds\models;

use ds\BaseModel;

class PosQueryModel extends BaseModel
{
    /**
     * @var string[] | null $codes 店铺编码列表
     */
    public ?array $codes = null;

    /**
     * @var string[] | null $names 店铺名称列表
     */
    public ?array $names = null;

    /**
     * @var int|null $pageNo 当前页面, 默认为1
     */
    public ?int $pageNo = null;

    /**
     *
     * @var int|null $pageSize 分页大小, 默认为100
     */
    public ?int $pageSize = null;


}
