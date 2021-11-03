<?php

namespace HumanToComputer\Universign\Request;

/**
 * @method string getName()
 * @method self setName(string $name)
 * @method string getAddress()
 * @method self setAddress(string $address)
 * @method string getPostalCode()
 * @method self setPostalCode(string $postalCode)
 * @method string getCity()
 * @method self setCity(string $city)
 * @method string getCountry()
 * @method self setCountry(string $country)
 */

class SEPAThirdParty extends Base
{
    protected $attributesTypes = [
        'name' => 'string',
        'address' => 'string',
        'postalCode' => 'string',
        'city' => 'string',
        'country' => 'string',
    ];
}
