<?php

namespace ds\requests;

use ds\BaseRequest;

/**
 * 店铺商品全量下载
 * 店铺商品全量下载，用于店铺授权后同步全店商品，只允许店铺授权后调用一次；
 *
 * 关于接口限流：3次/秒。
 *
 * 关于计费：根据实际下载推送的商品SKU数计费，1个SKU算一个API量。
 */
class PssaRequest extends BaseRequest
{

    public ?bool $responseArray = null;

    /**
     * @see http://wiki.yitaosoft.com/#/share/5wXnJGX9/OmzWOxzl
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.pos.sku.sync.all';
    }
}
