<?php

namespace HumanToComputer\Universign\Request;

/**
 * @method string getFirstname()
 * @method self setFirstname(string $firstname)
 * @method string getLastname()
 * @method self setLastname(string $lastname)
 * @method string getOrganization()
 * @method self setOrganization(string $organization)
 * @method string getEmailAddress()
 * @method self setEmailAddress(string $emailAddress)
 * @method string getPhoneNum()
 * @method self setPhoneNum(string $phoneNum)
 * @method string getBirthDate()
 * @method self setBirthDate(string $birthDate)
 * @method string getSuccessURL()
 * @method self setSuccessURL(string $successURL)
 * @method string getCancelURL()
 * @method self setCancelURL(string $cancelURL)
 * @method string getFailURL()
 * @method self setFailURL(string $failURL)
 */

class TransactionSigner extends Base
{
    protected $attributesTypes = [
        'firstname' => 'string',
        'lastname' => 'string',
        'organization' => 'string',
        'emailAddress' => 'string',
        'phoneNum' => 'string',
        'birthDate' => 'dateTime', // This format is needed yyyymmddT00:00:00 as string
        'successURL' => 'string',
        'cancelURL' => 'string',
        'failURL' => 'string',
    ];

}
