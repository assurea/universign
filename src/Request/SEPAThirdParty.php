<?php

namespace HumanToComputer\Universign\Request;

class SEPAThirdParty extends Base
{
	public function buildRpcValues(): \xmlrpcval
	{

		$build = [];

		$build['name'] = self::buildRpcValue($this->name, 'string');
		$build['address'] = self::buildRpcValue($this->address, 'string');
		$build['postalCode'] = self::buildRpcValue($this->postalCode, 'string');
		$build['city'] = self::buildRpcValue($this->city, 'string');
		$build['country'] = self::buildRpcValue($this->country, 'string');

		return new \xmlrpcval($build, 'struct');
	}

	/**
	 * @var string
	 */
	protected $name;
	/**
	 * @var string
	 */
	protected $address;
	/**
	 * @var string
	 */
	protected $postalCode;
	/**
	 * @var string
	 */
	protected $city;
	/**
	 * @var string
	 */
	protected $country;

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return SEPAThirdParty
	 */
	public function setName(string $name): SEPAThirdParty
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddress(): string
	{
		return $this->address;
	}

	/**
	 * @param string $address
	 * @return SEPAThirdParty
	 */
	public function setAddress(string $address): SEPAThirdParty
	{
		$this->address = $address;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPostalCode(): string
	{
		return $this->postalCode;
	}

	/**
	 * @param string $postalCode
	 * @return SEPAThirdParty
	 */
	public function setPostalCode(string $postalCode): SEPAThirdParty
	{
		$this->postalCode = $postalCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity(): string
	{
		return $this->city;
	}

	/**
	 * @param string $city
	 * @return SEPAThirdParty
	 */
	public function setCity(string $city): SEPAThirdParty
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountry(): string
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 * @return SEPAThirdParty
	 */
	public function setCountry(string $country): SEPAThirdParty
	{
		$this->country = $country;
		return $this;
	}

}
