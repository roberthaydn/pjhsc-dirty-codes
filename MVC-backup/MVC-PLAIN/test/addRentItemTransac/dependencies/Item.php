<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 30, 10:08pm
  * Description:
      Abstraction for Item.
  * Changes: 
  	
  * Notes:

  * Warning:
*/
	interface Item{
		function setID($id);
		function setName($name);
		function getID();
		function getName();		
	}
  