<?php
	include_once('Item.php');
	/**
  	* @version: 0.1
  	* @author: Abriel, Ronnel
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