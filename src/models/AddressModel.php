<?php

namespace ds\models;

use ds\BaseModel;

/**
 * @method int getAreaId()
 * @method string getCountry()
 * @method string getProvince()
 * @method string getCity()
 * @method string getDistrict()
 * @method string getDetailAddress()
 * @method self setAreaId(int $areaId)
 * @method self setCountry(string $country)
 * @method self setProvince(string $province)
 * @method self setCity(string $city)
 * @method self setDistrict(string $district)
 * @method self setDetailAddress(string $detailAddress)
 */
class AddressModel extends BaseModel
{
    /**
     * 地区 ID
     * @var int|null
     */
    public ?int $areaId = null;

    /**
     * 国家
     * @var string|null
     */
    public ?string $country = null;

    /**
     * 省份
     * @var string|null
     */
    public ?string $province = null;

    /**
     * 城市
     * @var string|null
     */
    public ?string $city = null;

    /**
     * 区县
     * @var string|null
     */
    public ?string $district = null;

    /**
     * 详细地址
     * @var string|null
     */
    public ?string $detailAddress = null;

}
