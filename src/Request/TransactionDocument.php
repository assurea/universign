<?php

namespace HumanToComputer\Universign\Request;


class TransactionDocument extends Base
{
	public function buildRpcValues(): \xmlrpcval
	{
		$build = [];

		$build['documentType'] = self::buildRpcValue($this->documentType, 'string');
		$build['content'] = self::buildRpcValue($this->content, 'base64');
		$build['url'] = self::buildRpcValue($this->url, 'string');
		$build['name'] = self::buildRpcValue($this->name, 'string');
		$build['title'] = self::buildRpcValue($this->title, 'string');
		$build['SEPAData'] = self::buildRpcValue($this->SEPAData);
		$build['signatureFields'] = self::buildRpcValue($this->signatureFields, 'array');

		return new \xmlrpcval($build, 'struct');
	}

	/**
	 * @var string
	 */
	protected $documentType;
	/**
	 * @var string base64
	 */
	protected $content;
	/**
	 * @var string
	 */
	protected $url;
	/**
	 * @var string
	 */
	protected $name;
	/**
	 * @var string
	 */
	protected $title;
	/**
	 * @var SEPAData
	 */
	protected $SEPAData;
	/**
	 * @var DocSignatureField[]
	 */
	protected $signatureFields;

	/**
	 * @return string
	 */
	public function getDocumentType(): string
	{
		return $this->documentType;
	}

	/**
	 * @param string $documentType
	 * @return TransactionDocument
	 */
	public function setDocumentType(string $documentType): TransactionDocument
	{
		$this->documentType = $documentType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->content;
	}

	/**
	 * @param string $content
	 * @return TransactionDocument
	 */
	public function setContent(string $content): TransactionDocument
	{
		$this->content = $content;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUrl(): string
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 * @return TransactionDocument
	 */
	public function setUrl(string $url): TransactionDocument
	{
		$this->url = $url;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return TransactionDocument
	 */
	public function setName(string $name): TransactionDocument
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return TransactionDocument
	 */
	public function setTitle(string $title): TransactionDocument
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * @return SEPAData
	 */
	public function getSEPAData(): SEPAData
	{
		return $this->SEPAData;
	}

	/**
	 * @param SEPAData $SEPAData
	 * @return TransactionDocument
	 */
	public function setSEPAData(SEPAData $SEPAData): TransactionDocument
	{
		$this->SEPAData = $SEPAData;
		return $this;
	}

	/**
	 * @return DocSignatureField[]
	 */
	public function getSignatureFields(): array
	{
		return $this->signatureFields;
	}

	/**
	 * @param DocSignatureField[] $signatureFields
	 * @return TransactionDocument
	 */
	public function addSignatureField(DocSignatureField  $docSignatureField): TransactionDocument
	{
		$this->signatureFields[] = $docSignatureField;
		return $this;
	}

}
