<?php

namespace ds\requests;

use ds\BaseRequest;

class OrderQueryRequest extends BaseRequest
{
    /**
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.third.order.query';
    }
}
