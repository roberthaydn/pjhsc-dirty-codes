<?php

/*DANGER!!! BUGGY */
class PersonController {	

	private $_personView;
	private $_personModel;

	/*
	* initialize Person's view and model
	*/
	function __contruct($personView, $personModel){
		$this->setPersonView($personView);
		$this->setPersonModel($personModel);
	}

	/*
	* setters
	*/
	private function setPersonView($personView){
		$this->_personView = $personView;	
	}
	private function setPersonModel($personModel){
		$this->_personModel = $personModel;
	}	

	/*
	* getters
	*/
	function getPersonView(){
		return $this->_personView;
	}
	function getPersonModel(){
		return $this->_personModel;
	}
	/*Operations =============*/
	function RequestPersonFirstName(){
		$this->getPersonView()->setPersonFirstNameData(
			$this->getPersonModel());	
	}
	function RequestedPersonFirstNameData() {
		return $this->getPersonView()->EncodedFirstNameData();
	}
}
