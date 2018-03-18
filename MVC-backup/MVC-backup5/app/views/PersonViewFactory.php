<?php 
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 29, 09:33pm
  * Description:
      Serves as the Factory View for the Person. 
  * Changes: 
  
  * Notes:

  * Warning:
*/
	include_once('PersonView.php');
	
	class PersonViewFactory{
		private function __construct() {}
		private function __clone() {}
		public static function Create(){
			return new PersonView();	
		}	
	}		

