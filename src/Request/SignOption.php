<?php

namespace HumanToComputer\Universign\Request;

class SignOption extends Base
{
	public function buildRpcValues(): \xmlrpcval
	{
		$vals = [
			'profile' => 'string',
			'signatureField' => null,
			'reason' => 'string',
			'location' => 'string',
			'signatureFormat' => 'string',
			'language' => 'string',
			'patternName' => 'string',
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
	 * @var DocSignatureField
	 */
	protected $signatureField;
	/**
	 * @var string
	 */
	protected $reason;
	/**
	 * @var string
	 */
	protected $location;
	/**
	 * @var string
	 * use TransactionRequestLanguage
	 */
	protected $signatureFormat;
	/**
	 * @var string
	 */
	protected $language;
	/**
	 * @var string
	 */
	protected $patternName;

	/**
	 * @return string
	 */
	public function getProfile(): string
	{
		return $this->profile;
	}

	/**
	 * @param string $profile
	 * @return SignOption
	 */
	public function setProfile(string $profile): SignOption
	{
		$this->profile = $profile;
		return $this;
	}

	/**
	 * @return DocSignatureField
	 */
	public function getSignatureField(): DocSignatureField
	{
		return $this->signatureField;
	}

	/**
	 * @param DocSignatureField $signatureField
	 * @return SignOption
	 */
	public function setSignatureField(DocSignatureField $signatureField): SignOption
	{
		$this->signatureField = $signatureField;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getReason(): string
	{
		return $this->reason;
	}

	/**
	 * @param string $reason
	 * @return SignOption
	 */
	public function setReason(string $reason): SignOption
	{
		$this->reason = $reason;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLocation(): string
	{
		return $this->location;
	}

	/**
	 * @param string $location
	 * @return SignOption
	 */
	public function setLocation(string $location): SignOption
	{
		$this->location = $location;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSignatureFormat(): string
	{
		return $this->signatureFormat;
	}

	/**
	 * @param string $signatureFormat
	 * @return SignOption
	 */
	public function setSignatureFormat(string $signatureFormat): SignOption
	{
		$this->signatureFormat = $signatureFormat;
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
	 * @return SignOption
	 */
	public function setLanguage(string $language): SignOption
	{
		$this->language = $language;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPatternName(): string
	{
		return $this->patternName;
	}

	/**
	 * @param string $patternName
	 * @return SignOption
	 */
	public function setPatternName(string $patternName): SignOption
	{
		$this->patternName = $patternName;
		return $this;
	}


}
