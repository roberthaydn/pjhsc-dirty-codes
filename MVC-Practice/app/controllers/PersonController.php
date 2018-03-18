<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 30, 12:45pm
  * Description:
      Serves as the Controller for the Person. 
  * Changes: 
  		No constructor, setting properties are all public.
		isInstanceOf(type) implemented. 
		isNull(type) implemented.
  * Notes:

  * Warning:
*/
/*
include_once('IController.php');
include_once('./app/models/IPersonModel.php');
include_once('./app/views/IPersonView.php');
*/

class PersonController implements IController {

	public $_personModel;
	public $_personView;

	/*
	* Check if isNullModel
	*/
	private function isNullModel($iPersonModel){
		if(is_null($iPersonModel)){
			throw new \Exception('Null Model.');
		}	
	}
	private function isNullView($iPersonView){
		if(is_null($iPersonView)){
			throw new \Exception('Null View.');
		}
	}
	/*
	* Check if isInstanceOfModel
	*/
	private function isInstanceOfModel($iPersonModel){
		if(!($iPersonModel instanceof IPersonModel)){
			throw new \Exception('Not instanceof IPersonModel.');
		}
	}
	private function isInstanceOfView($iPersonView){
		if(!($iPersonView instanceof IPersonView)){
			throw new \Exception('Not instanceof IPersonView.');
		}
	}
	/* 
	* Setter
	*/
	function setPersonModel($iPersonModel) {
		$this->isNullModel($iPersonModel);
		$this->isInstanceOfModel($iPersonModel);	
		$this->_personModel = $iPersonModel;
	}
	function setPersonView($iPersonView) {
		$this->isNullView($iPersonView);
		$this->isInstanceOfView($iPersonView);
		$this->_personView = $iPersonView;
	}

	/* 
	* Getter
	*/
	function getPersonModel() {
		return $this->_personModel;
	}

	function getPersonView() {
		return $this->_personView;
	}

	/*Operations =============*/
	//napasa ha strong view
	function RequestPersonFirstName(){
		$this->getPersonView()->setPersonFirstNameData($this->getPersonModel());
	}
	//napasa ha client
	function RequestedPersonFirstNameData() {
		return $this->getPersonView()->EncodedFirstNameData();
	}

	/*Operations =============*/
	//napasa ha strong view
	function RequestPersonLastname(){
		$this->getPersonView()->setPersonLastnameData($this->getPersonModel());
	}
	//napasa ha client
	function RequestedPersonLastname() {
		return $this->getPersonView()->EncodedLastnameData();
	}
}
