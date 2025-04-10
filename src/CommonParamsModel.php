<?php

namespace ds;

use ds\BaseModel;


/**
 * 
 * @method string getAppKey()
 * @method string getMethod()
 * @method string getTimestamp()
 * @method string getSign()
 * @method string getTag()
 * @method string getReqId()
 * @method self setAppKey(string $appKey)
 * @method self setMethod(string $method)
 * @method self setTimestamp(string $timestamp)
 * @method self setSign(string $sign)
 * @method self setTag(string $tag)
 * @method self setReqId(string $reqId)
 * 
 */
class CommonParamsModel extends BaseModel
{
    /**
     * appKey
     * @var string|null
     */
    public ?string $appKey = null;

    /**
     * 接口名称方法
     *
     * @var string|null
     */
    public ?string $method = null;

    /**
     * 时间戳
     *
     * @var int|null
     */
    public ?int $timestamp = null;

    /**
     * 签名
     *
     * @var string|null
     */
    public ?string $sign = null;

    /**
     * 推送标签。同⼀个推送
     * 接⼝ 可能会有多种tag
     * 值（单次只会有⼀
     * 个），不同的tag值表
     * 示不同的推送节点或者
     * 业务分⽀，开发者需要
     * 注意判断。
     *
     * @var string|null
     */
    public ?string $tag = null;

    /**
     * 请求唯⼀ID，⽤于防重
     *
     * @var string|null
     */
    public ?string $reqId = null;

}
