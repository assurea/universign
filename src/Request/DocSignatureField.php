<?php

namespace HumanToComputer\Universign\Request;

/**
 * @method string getName()
 * @method self setName(string $name)
 * @method int getPage()
 * @method self setPage(int $page)
 * @method int getX()
 * @method self setX(int $x)
 * @method int getY()
 * @method self setY(int $y)
 * @method int getSignerIndex()
 * @method self setSignerIndex(int $signerIndex)
 */

class DocSignatureField extends Base
{
    protected $attributesTypes = [
        'name' => 'string',
        'page' => 'int',
        'x' => 'int',
        'y' => 'int',
        'signerIndex' => 'int',
    ];
}
