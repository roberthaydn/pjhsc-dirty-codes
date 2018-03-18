<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 30, 10:09pm
  * Description:
      serves Inventory Item.
  * Changes: 
  
  * Notes:

  * Warning:
*/
	class InventoryItem implements Item{
		private $_id;
		private $_name;
		function setID($id){
			$this->_id = $id;
		}
		function setName($name){
			$this->_name = $name;
		}
		function getID(){
			return $this->_id;
		}
		function getName(){
			return $this->_name;
		}
	}