<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method string getNick()
 * @method string getName()
 * @method string getMobile()
 * @method string getPhone()
 * @method string getRemark()
 * @method self setNick(string $nick)
 * @method self setName(string $name)
 * @method self setMobile(string $mobile)
 * @method self setPhone(string $phone)
 * @method self setRemark(string $remark)
 */
class ContactModel extends BaseModel
{

    /**
     * 昵称
     * @var string|null
     */
    public ?string $nick = null;

    /**
     * 真实姓名
     * @var string|null
     */
    public ?string $name = null;

    /**
     * 手机
     * @var string|null
     */
    public ?string $mobile = null;

    /**
     * 电话
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * 联系人备注
     * @var string|null
     */
    public ?string $remark = null;

}
