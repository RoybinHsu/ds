<?php

namespace ds\models;

use ds\BaseModel;


/**
 * @method string getId()
 * @method string getCode()
 * @method string getName()
 * @method string getTitle()
 * @method string getPlatform()
 * @method string getPlatformType()
 * @method string getType()
 * @method string getCreateTime()
 * @method string getStatus()
 * @method string getRefUserId()
 * @method string getRefUserNick()
 * @method string getRefAuthStatus()
 * @method string getRefAuthExpiresTime()
 * @method string getExpireDate()
 * @method self setId(string $id)
 * @method self setCode(string $code)
 * @method self setName(string $name)
 * @method self setTitle(string $title)
 * @method self setPlatform(string $platform)
 * @method self setPlatformType(string $platformType)
 * @method self setType(string $type)
 * @method self setCreateTime(string $createTime)
 * @method self setStatus(string $status)
 * @method self setRefUserId(string $refUserId)
 * @method self setRefUserNick(string $refUserNick)
 * @method self setRefAuthStatus(string $refAuthStatus)
 * @method self setRefAuthExpiresTime(string $refAuthExpiresTime)
 * @method self setExpireDate(string $expireDate)
 */
class PosContentModel extends BaseModel
{
     /**
     * 店铺 ID
     * @var int|null
     */
    public ?int $id = null;

    /**
     * 店铺编码
     * @var string|null
     */
    public ?string $code = null;

    /**
     * 店铺名
     * @var string|null
     */
    public ?string $name = null;

    /**
     * 店铺标题
     * @var string|null
     */
    public ?string $title = null;

    /**
     * 店铺平台类型
     * @see OrderContentModel::RefTypeMap
     * @var string|null
     */
    public ?string $platform = null;

    /**
     * 店铺平台子类型
     * @var string|null
     */
    public ?string $platformType = null;

    /**
     * 店铺类
     * @var string|null
     */
    public ?string $type = null;

    /**
     * 创建时间, linux时间戳
     * @var int|null
     */
    public ?int $createTime = null;

    /**
     *
     * @var string|null
     */
    public ?string $status = null;

    /**
     * 关联平台用户id
     * @var string|null
     */
    public ?string $refUserId = null;

    /**
     *
     * @var string|null
     */
    public ?string $refUserNick = null;


    /**
     * 平台授权状态
     * @var string|null
     */
    public ?string $refAuthStatus = null;

    /**
     * 平台授权过期时间, linux时间戳
     * @var string|null
     */
    public ?string $refAuthExpiresTime = null;

    /**
     * 联系人信息
     * @var ContactModel|null
     */
    public ?ContactModel $contact = null;

    /**
     * 联系人地址
     * @var AddressModel|null
     */
    public ?AddressModel $address = null;

    /**
     * 店铺订购到期时间
     * @var string|null
     */
    public ?string $expireDate = null;

}
