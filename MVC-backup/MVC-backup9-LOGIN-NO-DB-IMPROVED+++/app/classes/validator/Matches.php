<?php

class Matches {

	private $_matches,
			$_passed = false;
	/*
	* Constructor
	*/
	public function __construct($field, $matches) {
		$this->set($field, $matches);
	}

	/*
	* Setter
	*/
	private function set($field, $matches) {
		if($field != $matches) {
			$this->_matches = 'Did not match.<br>';
		}
	}

	/*
	* Getters
	*/
	public function getMatches() {
		return $this->_matches;
	}

	/*
	* Check if _matches is not true | True is not Passed!
	*/
	public function isPassed() {
		if(!$this->_matches) {
			return $this->_passed = true;
		}
	}
}

class MatchesFactory {
	public static function setMatches($field, $matches) {
		return new Matches($field, $matches);
	}
}
