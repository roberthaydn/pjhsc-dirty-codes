<?php

class Required {

	private $_required,
			$_passed = false;
	/*
	* Constructor
	*/
	public function __construct($field, $required) {
		$this->set($field, $required);
	}

	/*
	* Setter
	*/
	private function set($field, $required) {
		if($field == '' && $required == true) {
			$this->_required = 'Required Field.';
		}
	}

	/*
	* Getters
	*/
	public function getRequired() {
		return $this->_required;
	}

	/*
	* Check if _required is not true | True is not Passed!
	*/
	public function isPassed() {
		if(!$this->_required) {
			return $this->_passed = true;
		}
	}
}

