<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 30, 10:07pm
  * Description:
      Serves as a basic sorted List.
  * Changes: 
  
  * Notes:

  * Warning:
*/
	class SortedList {

		private $_items = array();
		
		function add($key, $val){
			try {
				$this->_items[$key] = $val;
			} catch (Exception $e){
				echo $e->getMessage();
			}
		}
		function getValueByKey($id){
			return $this->_items[$id];
		}
	}