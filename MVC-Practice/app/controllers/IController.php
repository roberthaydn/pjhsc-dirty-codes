<?php 
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 28, 10:15pm
  * Description:
      Abstraction for Controller.
  * Changes: 
  
  * Notes:

  * Warning:
*/
	interface IController{
		function getPersonModel();
		function getPersonView();
		function RequestPersonFirstName();
		function RequestedPersonFirstNameData();
	}
