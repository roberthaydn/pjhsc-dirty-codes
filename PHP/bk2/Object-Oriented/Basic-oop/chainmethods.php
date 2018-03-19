<?php

class chain {

	private $str;

	public function __construct() {
		$this->str = '';
	}

	public function sayHello() {
		$this->str .="hello";
		return $this;
	}

	public function sayWorld() {
		$this->str .="world";
		return $this;
	}

	public function sayExclam() {
		$this->exclam .="!!!!!!!!!!!!!";
		return $this;
	}

	public function getStr() {
		return $this->str;
	}
}

$objChain = new chain();
echo $objChain->sayHello()->sayWorld()->getStr();


?>