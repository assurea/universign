<?php

namespace HumanToComputer\Universign\Response;

/**
 * @method getId()
 * @method getUrl()
 */
class TransactionResponse extends Base
{
    protected $attributesTypes = [
        'id' => true,
        'url' => true,
    ];
}
