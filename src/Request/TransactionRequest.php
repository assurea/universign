<?php

namespace HumanToComputer\Universign\Request;

class TransactionRequest extends Base
{
	public function buildRpcValues(): \xmlrpcval
	{
		$vals = [
			'profile' => 'string',
			'customId' => 'string',
			'signers' => 'array',
			'documents' => 'array',
			'mustContactFirstSigner' => 'bool',
			'finalDocSent' => 'bool',
			'description' => 'string',
			'certificateType' => 'string',
			'language' => 'string',
			'handwrittenSignature' => 'bool',
			'chainingMode' => 'string',
		];

		$build = [];

		foreach($vals as $prop => $type) {
			if($this->{$prop} !== null && $this->{$prop} !== '') {
				$build[$prop] = self::buildRpcValue($this->{$prop}, $type);
			}
		}

		return new \xmlrpcval($build, 'struct');
	}

	/**
	 * @var string
	 */
	protected $profile;

	/**
	 * @var string
	 */
	protected $customId;

	/**
	 * @var TransactionSigner[]
	 */
	protected $signers;

	/**
	 * @var TransactionDocument[]
	 */
	protected $documents;

	/**
	 * @var bool
	 */
	protected $mustContactFirstSigner;

	/**
	 * @var bool
	 */
	protected $finalDocSent;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var string
	 * use TransactionRequestCertificate
	 */
	protected $certificateType;

	/**
	 * @var string
	 * use TransactionRequestLanguage
	 */
	protected $language;

	/**
	 * @var bool
	 */
	protected $handwrittenSignature;

	/**
	 * @var string
	 * user TransactionRequestChainingMode
	 */
	protected $chainingMode;

	/**
	 * @return string
	 */
	public function getProfile(): string
	{
		return $this->profile;
	}

	/**
	 * @param string $profile
	 * @return TransactionRequest
	 */
	public function setProfile(string $profile): TransactionRequest
	{
		$this->profile = $profile;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCustomId(): string
	{
		return $this->customId;
	}

	/**
	 * @param string $customId
	 * @return TransactionRequest
	 */
	public function setCustomId(string $customId): TransactionRequest
	{
		$this->customId = $customId;
		return $this;
	}

	/**
	 * @return TransactionSigner[]
	 */
	public function getSigners(): array
	{
		return $this->signers;
	}

	/**
	 * @param TransactionSigner[] $signers
	 * @return TransactionRequest
	 */
	public function setSigners(array $signers): TransactionRequest
	{
		$this->signers = $signers;
		return $this;
	}

	/**
	 * @return TransactionDocument[]
	 */
	public function getDocuments(): array
	{
		return $this->documents;
	}

	/**
	 * @param TransactionDocument[] $documents
	 * @return TransactionRequest
	 */
	public function setDocuments(array $documents): TransactionRequest
	{
		$this->documents = $documents;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isMustContactFirstSigner(): bool
	{
		return $this->mustContactFirstSigner;
	}

	/**
	 * @param bool $mustContactFirstSigner
	 * @return TransactionRequest
	 */
	public function setMustContactFirstSigner(bool $mustContactFirstSigner): TransactionRequest
	{
		$this->mustContactFirstSigner = $mustContactFirstSigner;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isFinalDocSent(): bool
	{
		return $this->finalDocSent;
	}

	/**
	 * @param bool $finalDocSent
	 * @return TransactionRequest
	 */
	public function setFinalDocSent(bool $finalDocSent): TransactionRequest
	{
		$this->finalDocSent = $finalDocSent;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return TransactionRequest
	 */
	public function setDescription(string $description): TransactionRequest
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCertificateType(): string
	{
		return $this->certificateType;
	}

	/**
	 * @param string $certificateType
	 * @return TransactionRequest
	 */
	public function setCertificateType(string $certificateType): TransactionRequest
	{
		$this->certificateType = $certificateType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLanguage(): string
	{
		return $this->language;
	}

	/**
	 * @param string $language
	 * @return TransactionRequest
	 */
	public function setLanguage(string $language): TransactionRequest
	{
		$this->language = $language;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isHandwrittenSignature(): bool
	{
		return $this->handwrittenSignature;
	}

	/**
	 * @param bool $handwrittenSignature
	 * @return TransactionRequest
	 */
	public function setHandwrittenSignature(bool $handwrittenSignature): TransactionRequest
	{
		$this->handwrittenSignature = $handwrittenSignature;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getChainingMode(): string
	{
		return $this->chainingMode;
	}

	/**
	 * @param string $chainingMode
	 * @return TransactionRequest
	 */
	public function setChainingMode(string $chainingMode): TransactionRequest
	{
		$this->chainingMode = $chainingMode;
		return $this;
	}


    public function addSigner(TransactionSigner $signer)
    {
    	$this->signers[] = $signer;
        return $this;
    }

    public function addDocument(TransactionDocument $document)
    {
		$this->documents[] = $document;
        return $this;
    }
}
