<?php
/**
  *
  * Abstraction for databases.
  *
  * @version 0.1
  * @author Abriel I, Ronnel R.
  * Last Modified: @author Ronnel
  * Last Modified : Oct. 05, 06:20pm
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