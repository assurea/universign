<?php

namespace HumanToComputer\Universign\Request;

use DateTime;

class TransactionSigner extends Base
{
	public function buildRpcValues(): \xmlrpcval
	{
		$build = [];

		$build['firstname'] = self::buildRpcValue($this->firstname, 'string');
		$build['lastname'] = self::buildRpcValue($this->lastname, 'string');
		$build['organization'] = self::buildRpcValue($this->organization, 'string');
		$build['emailAddress'] = self::buildRpcValue($this->emailAddress, 'string');
		$build['phoneNum'] = self::buildRpcValue($this->phoneNum, 'string');
		$build['birthDate'] = self::buildRpcValue($this->birthDate, 'dateTime');
		$build['successURL'] = self::buildRpcValue($this->successURL, 'string');
		$build['cancelURL'] = self::buildRpcValue($this->cancelURL, 'string');
		$build['failURL'] = self::buildRpcValue($this->failURL, 'string');

		return new \xmlrpcval($build, 'struct');
	}

	/**
	 * @var string
	 */
	protected $firstname;

	/**
	 * @var string
	 */
	protected $lastname;

	/**
	 * @var string
	 */
	protected $organization;

	/**
	 * @var string
	 */
	protected $emailAddress;

	/**
	 * @var string
	 */
	protected $phoneNum;

	/**
	 * @var DateTime
	 * This format is needed yyyymmddT00:00:00 as string
	 */
	protected $birthDate;

	/**
	 * @var string
	 */
	protected $successURL;

	/**
	 * @var string
	 */
	protected $cancelURL;

	/**
	 * @var string
	 */
	protected $failURL;




	/**
	 * @return string
	 */
	public function getFirstname(): string
	{
		return $this->firstname;
	}

	/**
	 * @param string $firstname
	 * @return TransactionSigner
	 */
	public function setFirstname(string $firstname): TransactionSigner
	{
		$this->firstname = $firstname;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLastname(): string
	{
		return $this->lastname;
	}

	/**
	 * @param string $lastname
	 * @return TransactionSigner
	 */
	public function setLastname(string $lastname): TransactionSigner
	{
		$this->lastname = $lastname;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrganization(): string
	{
		return $this->organization;
	}

	/**
	 * @param string $organization
	 * @return TransactionSigner
	 */
	public function setOrganization(string $organization): TransactionSigner
	{
		$this->organization = $organization;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmailAddress(): string
	{
		return $this->emailAddress;
	}

	/**
	 * @param string $emailAddress
	 * @return TransactionSigner
	 */
	public function setEmailAddress(string $emailAddress): TransactionSigner
	{
		$this->emailAddress = $emailAddress;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhoneNum(): string
	{
		return $this->phoneNum;
	}

	/**
	 * @param string $phoneNum
	 * @return TransactionSigner
	 */
	public function setPhoneNum(string $phoneNum): TransactionSigner
	{
		$this->phoneNum = $phoneNum;
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getBirthDate(): DateTime
	{
		return $this->birthDate;
	}

	/**
	 * @param DateTime $birthDate
	 * @return TransactionSigner
	 */
	public function setBirthDate(DateTime $birthDate): TransactionSigner
	{
		$this->birthDate = $birthDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSuccessURL(): string
	{
		return $this->successURL;
	}

	/**
	 * @param string $successURL
	 * @return TransactionSigner
	 */
	public function setSuccessURL(string $successURL): TransactionSigner
	{
		$this->successURL = $successURL;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCancelURL(): string
	{
		return $this->cancelURL;
	}

	/**
	 * @param string $cancelURL
	 * @return TransactionSigner
	 */
	public function setCancelURL(string $cancelURL): TransactionSigner
	{
		$this->cancelURL = $cancelURL;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFailURL(): string
	{
		return $this->failURL;
	}

	/**
	 * @param string $failURL
	 * @return TransactionSigner
	 */
	public function setFailURL(string $failURL): TransactionSigner
	{
		$this->failURL = $failURL;
		return $this;
	}

}
