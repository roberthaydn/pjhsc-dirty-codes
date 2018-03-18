<?php
	include_once('./InventoryDatabase.php');
	include_once('./dependencies/InventoryItem.php');
	include_once('./dependencies/Item.php');
	include_once('./dependencies/Database.php');
	/**
	*
	* 	Serves as the Controller for Adding Inventory.
	*
	*	@version 0.1
	*	@author Abriel I, Ronnel R.
	*/
	class AddInventoryController{

		private $_item;
		private $_db;
		private $_view;
		/**
		*	Request to add a single item.
		*/
		function requestAddItem(){
			$this->setDB(new InventoryDatabase($this->getItem()));
			if($this->getDB()->add()){
				$this->getView()->encodeAddingMessage($this->getItem()->getName());
				return;
			}
			$this->getView()->encodeAddingMessage('err adding');
		}
		/**
		* 	The Requested Adding Message.
		*	@return string
		*/
		function getRequestedAddingMessage(){
			return $this->getView()->getEncodedAddingMessage(); 		
		}
		/**
		*	Sets the Item to be added.
		*/
		function setItem($item){
			if(!($item instanceof Item)) throw new \Exception('Invalid Argument, not an instance of Item.');
			$this->_item = $item;
		}
		/**
		*	Sets the View of this controller.
		*/
		function setView($view){$this->_view = $view; }
		private function getItem(){return $this->_item; }
		private function getDB(){return $this->_db; }
		private function getView(){return $this->_view;}
		private function setDB($db){
			if(!($db instanceof Database)) throw new \Exception('Invalid Argument, not an instance of Database.');
			$this->_db = $db;
		}
	}