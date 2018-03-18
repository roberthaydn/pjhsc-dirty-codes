<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 30, 10:08pm
  * Description:
      Abstraction for databases.
  * Changes: 
  
  * Notes:

  * Warning:
*/
	interface Database{
		function add();
		function delete();
		function update();
		function get($obj);
	}