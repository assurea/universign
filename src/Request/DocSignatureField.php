<?php

namespace HumanToComputer\Universign\Request;

class DocSignatureField extends Base
{
	/**
	 * @var string
	 */
	protected $name;
	/**
	 * @var int
	 */
	protected $page;
	/**
	 * @var int
	 */

	protected $x;
	/**
	 * @var int
	 */

	protected $y;
	/**
	 * @var int
	 */

	protected $signerIndex;

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return DocSignatureField
	 */
	public function setName(string $name): DocSignatureField
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPage(): int
	{
		return $this->page;
	}

	/**
	 * @param int $page
	 * @return DocSignatureField
	 */
	public function setPage(int $page): DocSignatureField
	{
		$this->page = $page;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getX(): int
	{
		return $this->x;
	}

	/**
	 * @param int $x
	 * @return DocSignatureField
	 */
	public function setX(int $x): DocSignatureField
	{
		$this->x = $x;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getY(): int
	{
		return $this->y;
	}

	/**
	 * @param int $y
	 * @return DocSignatureField
	 */
	public function setY(int $y): DocSignatureField
	{
		$this->y = $y;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getSignerIndex(): int
	{
		return $this->signerIndex;
	}

	/**
	 * @param int $signerIndex
	 * @return DocSignatureField
	 */
	public function setSignerIndex(int $signerIndex): DocSignatureField
	{
		$this->signerIndex = $signerIndex;
		return $this;
	}



}
