<?php

namespace ds\requests;

use ds\BaseRequest;

class OrderAfterRefundQueryRequest extends BaseRequest
{
    /**
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.third.order.after.refund.query';
    }
}
