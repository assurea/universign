<?php

namespace HumanToComputer\Universign\Request;

/**
 * @method string getProfile()
 * @method self setProfile(string $profile)
 * @method DocSignatureField getSignatureField()
 * @method self setSignatureField(DocSignatureField $signatureField)
 * @method string getReason()
 * @method self setReason(string $reason)
 * @method string getLocation()
 * @method self setLocation(string $location)
 * @method string getSignatureFormat()
 * @method self setSignatureFormat(string $signatureFormat)
 * @method string getLanguage()
 * @method self setLanguage(string $language)
 * @method string getPatternName()
 * @method self setPatternName(string $patternName)
 */

class SignOption extends Base
{
    protected $attributesTypes = [
        'profile' => 'string',
        'signatureField' => DocSignatureField::class,
        'reason' => 'string',
        'location' => 'string',
        'signatureFormat' => 'string', // Use TransactionRequestLanguage
        'language' => 'string',
        'patternName' => 'string',
    ];
}
