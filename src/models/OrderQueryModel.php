<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method self setPageNo(int $pageNo)
 * @method int getPageNo()
 * @method self setPageSize(int $pageSize)
 * @method int getPageSize()
 * @method self setStartTime(string $startTime)
 * @method string getStartTime()
 * @method self setEndTime(string $endTime)
 * @method string getEndTime()
 * @method self setRefOid(string $refOid)
 * @method string getRefOid()
 * @method self setTimeType(int $timeType)
 * @method int getTimeType()
 * @method self setReceiverMobile(string $receiverMobile)
 * @method string getReceiverMobile()
 * @method self setReceiverPhone(string $receiverPhone)
 * @method string getReceiverPhone()
 * @method self setReceiverName(string $receiverName)
 * @method string getReceiverName()
 * @method self setRefBuyerNick(string $refBuyerNick)
 * @method string getRefBuyerNick()
 * @method self setPosId(int $posId)
 * @method int getPosId()
 * @method self setPosCode(string $posCode)
 * @method string getPosCode()
 * @see http://wiki.yitaosoft.com/#/share/Rd8xagXg/oNzvkW2D
 */
class OrderQueryModel extends BaseModel
{
    /**
     * 返回页码； 默认1， 当前采用分页返回，数量和页数会一起传，如果不传，则采用 默认值
     *
     * @var int | null
     */
    public ?int $pageNo = null;

    /**
     * 返回数量；默认 50，最大 100
     *
     * @var int | null
     */
    public ?int $pageSize = null;

    /**
     * 开始时间, 开始时间不得早于1个月前
     *
     * @var string | null
     */
    public ?string $startTime = null;

    /**
     * 结束时间, 开始时间和结束时间跨度不得超过24小时
     *
     * @var string | null
     */
    public ?string $endTime = null;

    /**
     * 订单编号, 多个以逗号分隔, 如指定该字段, 则无需填写开始时间和结束时间
     *
     * @var string | null
     */
    public ?string $refOid = null;

    /**
     * 时间类型；默认1， 1:平台更新时间，2:点三创建创建
     *
     * @var int | null
     */
    public ?int $timeType = null;

    /**
     * 收货人手机
     *
     * @var string | null
     */
    public ?string $receiverMobile = null;

    /**
     * 收货人电话
     *
     * @var string | null
     */
    public ?string $receiverPhone = null;

    /**
     * 收货人姓名
     *
     * @var string | null
     */
    public ?string $receiverName = null;

    /**
     * 收货人昵称
     *
     * @var string | null
     */
    public ?string $refBuyerNick = null;

    /**
     * 查询店铺ID
     *
     * @var int | null
     */
    public ?int $posId = null;

    /**
     * 店铺编码
     *
     * @var string | null
     */
    public ?string $posCode = null;
}
