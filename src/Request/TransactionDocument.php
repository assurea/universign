<?php

namespace HumanToComputer\Universign\Request;

/**
 * @method string getDocumentType()
 * @method setDocumentType(string $documentType)
 * @method string getContent()
 * @method setContent(string $content)
 * @method string getUrl()
 * @method setUrl(string $url)
 * @method string getName()
 * @method setName(string $name)
 * @method string getTitle()
 * @method setTitle(string $title)
 * @method SEPAData getSEPAData()
 * @method setSEPAData(SEPAData $sEPAData)
 * @method DocSignatureField[] getSignatureFields()
 * @method setSignatureFields(DocSignatureField[] $signatureFields)
 */

class TransactionDocument extends Base
{
    protected $attributesTypes = [
        'documentType'    => 'string',
        'content'         => 'base64',
        'url'             => 'string',
        'name'            => 'string',
        'title'           => 'string',
        'SEPAData' => SEPAData::class,
        'signatureFields' => 'array',
    ];

    public function addSignatureField(DocSignatureField  $docSignatureField): self
    {
        $this->attributes['signatureFields'][] = $docSignatureField;
        return $this;
    }
}
