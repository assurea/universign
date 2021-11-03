<?php

namespace HumanToComputer\Universign\Request;

/**
 * @method string getRum()
 * @method self setRum(string $rum)
 * @method string getIcs()
 * @method self setIcs(string $ics)
 * @method string getIban()
 * @method self setIban(string $iban)
 * @method string getBic()
 * @method self setBic(string $bic)
 * @method bool getRecurring()
 * @method self setRecurring(bool $recurring)
 * @method SEPAThirdParty getDebtor()
 * @method self setDebtor(SEPAThirdParty $debtor)
 * @method SEPAThirdParty getCreditor()
 * @method self setCreditor(SEPAThirdParty $creditor)
 */

class SEPAData extends Base
{
    protected $attributesTypes = [
        'rum' => 'string',
        'ics' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'recurring' => 'bool',
        'debtor' => SEPAThirdParty::class,
        'creditor' => SEPAThirdParty::class,
    ];
}
