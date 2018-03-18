<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 29, 09:32pm
  * Description:
      Serves as the Factory Model for the Person. 
  * Changes: 
  
  * Notes:

  * Warning:
*/
include_once('PersonModel.php');

class PersonModelFactory {

	private function __construct() {}
	private function __clone() {}

	public static function Create() {
		return new PersonModel();
	}
}
