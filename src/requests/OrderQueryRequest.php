<?php

namespace ds\requests;

use ds\BaseRequest;

class OrderQueryRequest extends BaseRequest
{
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
