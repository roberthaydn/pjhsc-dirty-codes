<?php 
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 29, 09:30pm
  * Description:
      Serves as the Factory Controller for the Person. 
  * Changes: 
  
  * Notes:

  * Warning:
*/
	include_once('PersonController.php');
	include_once('IController.php');
	include_once('./app/models/IPersonModel.php');
	include_once('./app/views/IPersonView.php');
	
	class PersonControllerFactory{

		private function __construct() {}
		private function __clone() {}

		public static function Create() {
			return new PersonController();
		}
	}