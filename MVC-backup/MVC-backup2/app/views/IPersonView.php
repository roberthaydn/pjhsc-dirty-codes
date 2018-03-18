<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 29, 09:33pm
  * Description:
      Absraction for the Person View.
  * Changes: 
  
  * Notes:

  * Warning:
*/
	interface IPersonView{
		function setPersonFirstNameData($personModel);
		function getPersonModel();
		function EncodedFirstNameData();	
	}