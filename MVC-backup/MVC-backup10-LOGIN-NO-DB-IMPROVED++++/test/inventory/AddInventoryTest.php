<?php
	
	include_once('InventoryDatabase.php');
	include_once('AddInventoryController.php');
	include_once('AddInventoryView.php');
	include_once('./dependencies/InventoryItem.php');

	class AddInventoryTest extends PHPUnit_Framework_TestCase{

		function testAddOne(){
			$item = new InventoryItem();
			$item->setName('vanilla');
			$db = new InventoryDatabase($item);
			$db->add();
		}
		function testOrchestra(){
			$controller = new AddInventoryController();	
			$view = new AddInventoryView();
			$item = new InventoryItem();
			
			$controller->setView($view);
			$item->setName('cup cake');
			$controller->setItem($item);
			$controller->requestAddItem();

			$message = $controller->getRequestedAddingMessage();
						
		}
	}