<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 30, 10:07pm
  * Description:
      Serves as a basic List.
  * Changes: 
  
  * Notes:

  * Warning:
*/
	class SimpleList {

		private $_items = array();
				
		function add($val){
			$this->_items[] = $val;
		}	

		function getList(){
			return $this->_items;
		}
	}
	