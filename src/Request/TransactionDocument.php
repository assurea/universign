<?php

namespace HumanToComputer\Universign\Request;

/**
 * @method string getDocumentType()
 * @method self setDocumentType(string $documentType)
 * @method string getContent()
 * @method self setContent(string $content)
 * @method string getUrl()
 * @method self setUrl(string $url)
 * @method string getName()
 * @method self setName(string $name)
 * @method string getTitle()
 * @method self setTitle(string $title)
 * @method string getMetaData()
 * @method self setMetaData(MetaData $metaData)
 * @method SEPAData getSEPAData()
 * @method self setSEPAData(SEPAData $sEPAData)
 * @method DocSignatureField[] getSignatureFields()
 * @method self setSignatureFields(DocSignatureField[] $signatureFields)
 */

class TransactionDocument extends Base
{
	protected $attributesTypes = [
		'documentType'    => 'string',
		'content'         => 'base64',
		'url'             => 'string',
		'name'            => 'string',
		'title'           => 'string',
		'metaData'           => MetaData::class,
		'SEPAData' => SEPAData::class,
		'signatureFields' => 'array',
	];

	public function addSignatureField(DocSignatureField  $docSignatureField): self
	{
		$this->attributes['signatureFields'][] = $docSignatureField;
		return $this;
	}
}
