<?php

namespace ds\requests;

use ds\BaseRequest;
use ds\responses\OrderQueryResponse;

class OrderQueryRequest extends BaseRequest
{
    public ?string $responseClass = OrderQueryResponse::class;

    /**
     * 店铺订单查询 ID：oNzvkW2D
     * @see http://wiki.yitaosoft.com/#/share/Rd8xagXg/oNzvkW2D
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.third.order.query';
    }
}
