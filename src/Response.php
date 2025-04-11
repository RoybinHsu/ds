<?php

namespace ds;

use ds\BaseModel;

/**
 * @method BaseResponse getResponse()
 * @method string getReqId()
 * @method self setResponse(BaseResponse $response)
 * @method self setReqId(string $reqId)
 */
class Response extends BaseModel
{
    /**
     * 接口响应的业务数据
     *
     * @var BaseResponse|null
     */
    public ?BaseResponse $response = null;

    /**
     * @var string|null
     */
    public ?string $_req_id = null;

}
