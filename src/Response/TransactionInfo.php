<?php

namespace HumanToComputer\Universign\Response;

/**
 * @method getStatus()
 * @method getSignerInfos()
 * @method getCurrentSigner()
 * @method getCreationDate()
 * @method getDescription()
 * @method getIniatorInfo()
 * @method getEachField()
 * @method getCustomId()
 * @method getTransactionId()
 */
class TransactionInfo extends Base
{
    protected $attributesTypes = [
        'status' => true,
        'signerInfos' => true,
        'currentSigner' => true,
        'creationDate' => true,
        'description' => true,
        'iniatorInfo' => true,
        'eachField' => true,
        'customId' => true,
        'transactionId' => true,
    ];
}
