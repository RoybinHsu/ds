<?php

namespace ds\requests;

use ds\BaseRequest;

class PssbRequest extends BaseRequest
{

    /**
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.pos.sku.sync.byTime';
    }
}
