<?php
	include_once('InventoryDatabase.php');
	include_once('AddInventoryController.php');
	include_once('AddInventoryView.php');
	include_once('./dependencies/InventoryItem.php');

	/**
	*	Serves as the central server for adding items.
	*	@version 0.1
	*	@author Abriel I, Ronnel R.
	*/
	class AddInventorySever {

		private $_controller;
		private $_view;
		private $_item;

		/**
		*	Construct all the MVC modules.
		*/
		function __construct(){
			$this->_controller = new AddInventoryController();	
			$this->_view = new AddInventoryView();
			$this->_item = new InventoryItem();
		}
		/**
		*	Add Item request.
		*	@param string $item_name (required).
		*/	
		function addItem($item_name){
			$this->_controller->setView($this->_view);
			$this->_item->setName($item_name);
			$this->_controller->setItem($this->_item);
			$this->_controller->requestAddItem();
		}
		/**
		*	Response from the message from the server.
		*	@return The encoded adding message.
		*/
		function addingMessageResponse(){
			return $this->_controller->getRequestedAddingMessage();	
		}
	}	

	$server = new AddInventorySever();
	$server->addItem($_GET['item_name']);

	echo $server->addingMessageResponse();