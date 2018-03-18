<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 29, 01:12am
  * Description:
      Serves as the model for Person.
  * Changes: 
      id and lastname properties.
  * Notes:

  * Warning:
*/
include_once('IPersonModel.php');

class PersonModel implements IPersonModel{

  private $_id;
	private $_firstName;
	private $_lastName;

  public function setID($id){
    $this->_id = $id;
  }
  public function setFirstName($firstName) {
    $this->_firstName = $firstName;
  }
  public function setLastName($lastName){
    $this->_lastName = $lastName; 
  }
  public function getID(){
    return $this->_id;
  }
	public function getFirstName() {
		return $this->_firstName;
	}
  public function getLastName(){
    return $this->_lastName; 
  }
  
}
