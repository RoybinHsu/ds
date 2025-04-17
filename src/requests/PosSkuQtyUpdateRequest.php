<?php

namespace ds\requests;

use ds\BaseModel;
use ds\BaseRequest;
use ds\models\PosSkuQtyUpdateContent;
use ds\models\PosSkuQtyUpdateModel;
use ds\responses\PosSkuQtyUpdateResponse;
use InvalidArgumentException;

/**
 * 店铺商品库存批量修改，一次最多传入50个sku；
 *
 * 该接口为增值付费接口，使用该接口需额外付费，具体咨询商务
 *
 * 接口计费说明，每个sku会算一次接口调用，如果某个sku更新库存的同时更新上下架状态，则算二次接口调用。
 * @see http://wiki.yitaosoft.com/#/share/Rd8xagXg/Br2j662G
 *
 */
class PosSkuQtyUpdateRequest extends BaseRequest
{

    public ?string $responseClass = PosSkuQtyUpdateResponse::class;

    /**
     * @var PosSkuQtyUpdateModel
     */
    protected $data;

    public function __construct(PosSkuQtyUpdateModel $data)
    {
        parent::__construct();
        $this->data = $data;
    }

    /**
     * @return string
     * @inheritDoc
     */
    public function getUri(): string
    {
        return 'ds.omni.erp.pos.sku.qty.update';
    }

    /**
     * 修改数据
     *
     * @return array
     */
    public function getParams(): array
    {
        if ($this->data->content === null) {
            throw new InvalidArgumentException('Data content must be an instance of `PosSkuQtyUpdateContent`');
        }
        foreach ($this->data->content as &$item) {
            $item = $item->toArray();
        }
        return $this->data->toArray();
    }
}
