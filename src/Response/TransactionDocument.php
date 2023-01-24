<?php

namespace HumanToComputer\Universign\Response;

use stdClass;

/**
 * @method getDocumentType()
 * @method getContent()
 * @method getName()
 * @method getSignatureFields()
 * @method getCheckBoxTexts()
 * @method stdClass|null getMetaData()
 * @method getDisplayName()
 * @method getSEPAData()
 */
class TransactionDocument extends Base
{
    protected $attributesTypes = [
        'documentType' => true,
        'content' => true,
        'name' => true,
        'signatureFields' => true,
        'checkBoxTexts' => true,
        'metaData' => true,
        'displayName' => true,
        'SEPAData' => true,
    ];
}
