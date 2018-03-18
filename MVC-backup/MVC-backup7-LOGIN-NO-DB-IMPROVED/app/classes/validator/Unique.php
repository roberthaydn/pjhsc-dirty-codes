<?php

class Unique {

	private $_unique,
			$_passed = false;
	/*
	* Constructor
	*/
	public function __construct($field, $unique) {
		$this->set($field, $unique);
	}

	/*
	* Setter
	*/
	private function set($field, $unique) {
		if($field == $unique) {
			$this->_unique = $field.' is already exist.';
		}
	}

	/*
	* Getters
	*/
	public function getUnique() {
		return $this->_unique;
	}

	/*
	* Check if _unique is not true | True is not Passed!
	*/
	public function isPassed() {
		if(!$this->_unique) {
			return $this->_passed = true;
		}
	}
}

class UniqueFactory {
	public static function setUnique($field, $unique) {
		return new Unique($field, $unique);
	}
}
