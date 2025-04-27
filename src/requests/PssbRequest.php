<?php

namespace ds\requests;

use ds\BaseRequest;

/**
 * @see http://wiki.yitaosoft.com/#/share/5wXnJGX9/57zL3aXQ
 */
class PssbRequest extends BaseRequest
{

    public ?string $responseClass = null;
    /**
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.pos.sku.sync.byTime';
    }
}
