<?php

class Min {

	private $_min,
			$_passed = false;
	/*
	* Constructor
	*/
	public function __construct($field, $min) {
		$this->set($field, $min);
	}

	/*
	* Setter
	*/
	private function set($field, $min) {
		if(strlen($field) < $min) {
			$this->_min = 'Field minimum at least '.$min.' characters.<br>';
		}
	}

	/*
	* Getters
	*/
	public function getMin() {
		return $this->_min;
	}

	/*
	* Check if _min is not true | True is not Passed!
	*/
	public function isPassed() {
		if(!$this->_min) {
			return $this->_passed = true;
		}
	}
}

class MinFactory {
	public static function setMin($field, $min) {
		return new Min($field, $min);
	}
}
