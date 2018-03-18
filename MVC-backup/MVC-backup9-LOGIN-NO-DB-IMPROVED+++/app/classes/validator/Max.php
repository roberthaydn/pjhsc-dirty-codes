<?php

class Max {

	private $_max,
			$_passed = false;
	/*
	* Constructor
	*/
	public function __construct($field, $max) {
		$this->set($field, $max);
	}

	/*
	* Setter
	*/
	private function set($field, $max) {
		if(strlen($field) > $max) {
			$this->_max = 'Field maximum at least '.$max.' characters.<br>';
		}
	}

	/*
	* Getters
	*/
	public function getMax() {
		return $this->_max;
	}

	/*
	* Check if _max is not true | True is not Passed!
	*/
	public function isPassed() {
		if(!$this->_max) {
			return $this->_passed = true;
		}
	}
}

class MaxFactory {
	public static function setMax($field, $max) {
		return new Max($field, $max);
	}
}
