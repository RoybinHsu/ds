<?php

namespace ds\requests;

use ds\BaseRequest;
use ds\models\OrderQueryModel;

class OrderQueryRequest extends BaseRequest
{

    private OrderQueryModel $data;
    public function __construct(OrderQueryModel $data)
    {
        $this->data = $data;
    }

    /**
     * @inheritDoc
     */
    public function getParams(): array
    {
        return $this->data->toArray();
    }

    /**
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.third.order.query';
    }
}
