<?php

namespace ds\requests;

use ds\BaseRequest;
use ds\responses\PosQueryResponse;


class PosQueryRequest extends BaseRequest
{

    public ?string $responseClass = PosQueryResponse::class;

    /**
     * 店铺列表查询 ID：5wXnY089
     *
     * @see http://wiki.yitaosoft.com/#/share/Rd8xagXg/5wXnY089
     *
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.pos.query';
    }
}
