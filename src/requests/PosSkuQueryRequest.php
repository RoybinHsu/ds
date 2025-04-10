<?php

namespace ds\requests;

use ds\BaseRequest;

class PosSkuQueryRequest extends BaseRequest
{

    /**
     * 店铺商品查询
     * @see http://wiki.yitaosoft.com/#/share/Rd8xagXg/Rd8xmxXg
     *
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.third.pos.sku.query';
    }

    /**
     * @return void
     */
    public function buildResponse()
    {

    }

}
