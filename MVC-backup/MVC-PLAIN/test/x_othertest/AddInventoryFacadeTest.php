<?php

	class AddInventoryFacadeTest extends PHPUnit_Framework_TestCase{

		function testItem_Prop(){

			$itemID = 1;
			$itemName = 'item name';

			$item = new Item();
			$item->setID($itemID);			
			$item->setName($itemName);

			$id = $item->getID();
			$name = $item->getName();

			$print = 0;
			if($print == 1){
				echo $id; //1.
				echo $name; //item name.
			}
		}

		function testSortedList(){

			$sortedlist = new SortedList();

			$key = 1;
			$val = "Value";

			$sortedlist->add($key, $val);

			$jon = $sortedlist->getValueByKey(1);

			$print = 0;
			if($print == 1){
				echo $jon;	
			}
		}

		function testSortedList_AddMultipleValues(){

			$sortedlist = new SortedList();	

			$key1 = 1;
			$key2 = 2;
			$val1 = "Value 1";
			$val2 = "Value 2";

			$sortedlist->add($key1, $val1);
			$sortedlist->add($key2, $val2);

			$value1 = $sortedlist->getValueByKey(1);
			$value2 = $sortedlist->getValueByKey(2);

			$this->assertEquals($val1, $val1); 
			$this->assertEquals($val2, $val2);
			
			$print = 0;
			if($print == 1){
				echo $value1; //Value 1
				echo $value2; //Value 2
			}
		}

		function testSimpleList(){

			$simpleList = new SimpleList();		

			$item1 = "item 1";
			$item2 = "item 2";
			$item3 = "item 3";

			$simpleList->add($item1);
			$simpleList->add($item2);
			$simpleList->add($item3);
			
			$print = 1;
			if($print == 0){
				print_r($simpleList->getList());
				echo $simpleList->getList()[0];
			}
		}

		function testItem_AddToDatabaseAndGet(){

			$item = new Item();
			$item->setName('milk and choco');
			$db = new ItemDatabase($item);
			$db->add();	

			$id = 0;
			$db_item = $db->get($id);
			
			echo $db_item->getName();

			//$db->accept(new DatabaseVisitor());
		}
	}

	interface Visitor {
		function visit($friend);
	}
	class DatabaseVisitor{

		function visit($friend){}
	}

	interface Database{
		function add();
		function delete();
		function update();
		function get($obj);
	}
	/*In memory database.*/
	class ItemDatabase implements Database{

		private $_item;
		private static $_itemList;
		private static $name;

		function __construct($item){
			$this->initializeItemList();
			$this->setItem($item);
		}
		function add(){
			$this->getItemList()->add($this->getItem());
		}
		function delete(){
			throw new \Exception('Not yet supported.');
		}
		function update(){
			throw new \Exception('Not yet supported.');
		}
		function get($obj){
			return $this->getItemList()->getList()[$id];
		}
		function truncate(){
			$this->initializeItemList();
		}

		private function initializeItemList(){
			self::$_itemList = new SimpleList();
		}
		private function setItem($item){
			$this->_item = $item;
		}
		private function getItemList(){
			return self::$_itemList;
		}
		private function getItem(){
			return $this->_item;
		}

		function accept($friend){
			$friend->visit($this);
		}
	}
	interface Item{
		function setID($id);
		function setName($name);
		function getID();
		function getName();	
	}
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
	}//end item class.

	class SortedList {

		private $_items = array();
		
		function add($key, $val){
			try{
				$this->_items[$key] = $val;
			}catch (Exception $e){
				echo $e->getMessage();
			}
		}
		function getValueByKey($id){
			return $this->_items[$id];
		}
	}

	class SimpleList {

		private $_items = array();
				
		function add($val){
			$this->_items[] = $val;
		}	

		function getList(){
			return $this->_items;
		}
	}
