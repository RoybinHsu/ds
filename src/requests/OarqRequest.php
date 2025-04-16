<?php

namespace ds\requests;

use ds\BaseRequest;

/**
 * 接口名称简写
 */
class OarqRequest extends BaseRequest
{
    /**
     * 店铺售后查询
     * @see http://wiki.yitaosoft.com/#/share/Rd8xagXg/jbXKOEX7
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.third.order.after.refund.query';
    }

}
