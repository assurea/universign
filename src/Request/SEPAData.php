<?php

namespace HumanToComputer\Universign\Request;

class SEPAData extends Base
{

	public function buildRpcValues(): \xmlrpcval
	{


		$build = [];

		$build['rum'] = self::buildRpcValue($this->rum, 'string');
		$build['ics'] = self::buildRpcValue($this->ics, 'string');
		$build['iban'] = self::buildRpcValue($this->iban, 'string');
		$build['bic'] = self::buildRpcValue($this->bic, 'string');
		$build['recurring'] = self::buildRpcValue($this->recurring, 'bool');
		$build['debtor'] = self::buildRpcValue($this->debtor);
		$build['creditor'] = self::buildRpcValue($this->creditor);

		return new \xmlrpcval($build, 'struct');
	}

	/**
	 * @var string
	 */
	protected $rum;

	/**
	 * @var string
	 */
	protected $ics;

	/**
	 * @var string
	 */
	protected $iban;

	/**
	 * @var string
	 */
	protected $bic;

	/**
	 * @var bool
	 */
	protected $recurring;

	/**
	 * @var SEPAThirdParty
	 */
	protected $debtor;

	/**
	 * @var SEPAThirdParty
	 */
	protected $creditor;

	/**
	 * @return string
	 */
	public function getRum(): string
	{
		return $this->rum;
	}

	/**
	 * @param string $rum
	 * @return SEPAData
	 */
	public function setRum(string $rum): SEPAData
	{
		$this->rum = $rum;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getIcs(): string
	{
		return $this->ics;
	}

	/**
	 * @param string $ics
	 * @return SEPAData
	 */
	public function setIcs(string $ics): SEPAData
	{
		$this->ics = $ics;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getIban(): string
	{
		return $this->iban;
	}

	/**
	 * @param string $iban
	 * @return SEPAData
	 */
	public function setIban(string $iban): SEPAData
	{
		$this->iban = $iban;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBic(): string
	{
		return $this->bic;
	}

	/**
	 * @param string $bic
	 * @return SEPAData
	 */
	public function setBic(string $bic): SEPAData
	{
		$this->bic = $bic;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isRecurring(): bool
	{
		return $this->recurring;
	}

	/**
	 * @param bool $recurring
	 * @return SEPAData
	 */
	public function setRecurring(bool $recurring): SEPAData
	{
		$this->recurring = $recurring;
		return $this;
	}

	/**
	 * @return SEPAThirdParty
	 */
	public function getDebtor(): SEPAThirdParty
	{
		return $this->debtor;
	}

	/**
	 * @param SEPAThirdParty $debtor
	 * @return SEPAData
	 */
	public function setDebtor(SEPAThirdParty $debtor): SEPAData
	{
		$this->debtor = $debtor;
		return $this;
	}

	/**
	 * @return SEPAThirdParty
	 */
	public function getCreditor(): SEPAThirdParty
	{
		return $this->creditor;
	}

	/**
	 * @param SEPAThirdParty $creditor
	 * @return SEPAData
	 */
	public function setCreditor(SEPAThirdParty $creditor): SEPAData
	{
		$this->creditor = $creditor;
		return $this;
	}
}
