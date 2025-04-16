<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method self setPageNo(int $pageNo)
 * @method self setPageSize(int $pageSize)
 * @method self setStartTime(string $startTime)
 * @method self setEndTime(string $endTime)
 * @method self setTimeType(int $timeType)
 * @method self setRefOid(string $refOid)
 * @method self setRefAid(string $refAid)
 * @method self setPosId(int $posId)
 * @method int|null getPageNo()
 * @method int|null getPageSize()
 * @method string|null getStartTime()
 * @method string|null getEndTime()
 * @method int|null getTimeType()
 * @method string|null getRefOid()
 * @method string|null getRefAid()
 * @method int|null getPosId()
 *
 * @see http://wiki.yitaosoft.com/#/share/Rd8xagXg/jbXKOEX7
 */
class OarqModel extends BaseModel
{
    /**
     * 返回页码； 默认1， 当前采用分页返回，数量和页数会一起传，如果不传，则采用 默认值
     *
     * @var int|null
     */
    public ?int $pageNo = null;

    /**
     * 返回数量；默认 100，最大 100
     *
     * @var int|null
     */
    public ?int $pageSize = null;

    /**
     * 创建开始时间的时间
     *
     * @var string|null
     */
    public ?string $startTime = null;
    /**
     * 创建结束时间的时间
     *
     * @var string|null
     */
    public ?string $endTime = null;

    /**
     * 时间类型；默认1， 1:平台更新时间，2:点三创建创建
     *
     * @var int|null
     */
    public ?int $timeType = null;

    /**
     * 订单编号；多个以逗号分隔
     *
     * @var string|null
     */
    public ?string $refOid = null;

    /**
     * 售后单编码; 多个以逗号分隔
     *
     * @var string|null
     */
    public ?string $refAid = null;

    /**
     * 店铺ID
     *
     * @var int|null
     */
    public ?int $posId = null;

}
