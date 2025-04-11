<?php

namespace ds;

use ds\BaseModel;

/**
 * @method object getData()
 * @method bool getSuccess()
 * @method self setData(object $data)
 * @method self setSuccess(bool $success)
 */
class BaseResponse extends BaseModel
{
    /**
     * 业务数据
     * @var array|null
     */
    public ?array $data;

    /**
     *
     * 接口响应
     * @var bool|null
     */
    public ?bool $success = null;


}
