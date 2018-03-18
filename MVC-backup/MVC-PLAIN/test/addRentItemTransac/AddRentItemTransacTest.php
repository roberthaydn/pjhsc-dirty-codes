<?php
	
	include_once('./dependencies/Database.php');
	include_once('./dependencies/Item.php');
	include_once('./dependencies/InventoryItem.php');
	include_once('./dependencies/Account.php');
	include_once('./dependencies/SignInAccount.php');
	include_once('./dependencies/Connection.php');

	class AddRentTransactTest extends PHPUnit_Framework_TestCase {

		function testAddRentItemTransacModel(){
			$item = new InventoryItem();
			$director = new SignInAccount();
			$customer = new RegularCustomer();
			$model = new AddRentItemTransacModel();
			$model->setItem($item);
			$model->setDirector($director);
			$model->setCustomer($customer);
			$this->assertEquals($item, $model->getItem());
			$this->assertEquals($director, $model->getDirector());
			$this->assertEquals($customer, $model->getCustomer());
		}

		function xtestRentDatabase(){

			$item = new InventoryItem();
			$item->setID(1);
			$director = new SignInAccount();
			$director->setID(2);
			$customer = new RegularCustomer();
			$customer->setID(3);
			$model = new AddRentItemTransacModel();
			$model->setItem($item);
			$model->setDirector($director);
			$model->setCustomer($customer);

			$db = new RentalDatabase($model);
			echo $db->add();
		}

		function testAddOneTranasaction(){
			$controller = new AddRentItemTransacController();
			$view = new AddRentItemTransacView();
			$model = new AddRentItemTransacModel();
			$model->setCustomer(new RegularCustomer());
			$model->setDirector(new SignInAccount());
			$model->setItem(new InventoryItem());
			$controller->setModel($model);
			$controller->setView($view);
			$this->assertNotNull($controller->getModel());
			$this->assertNotNull($controller->getView());
			$controller->requestAddTransaction();
			$controller->requestedAddTransactionMessage();
		}
	}
	
	class AddRentItemTransacView{}
	class AddRentItemTransacModel{
		private $_director;
		private $_customer;
		private $_item;
		function setCustomer($customer){
			$this->throwIfNullParam($customer);
			$this->throwExceptionIfNotCustomer($customer);
			$this->_customer = $customer;
		}
		function setDirector($director){
			$this->throwIfNullParam($director);
			$this->throwExceptionIfNotAccount($director);
			$this->_director = $director;
		}
		function setItem($item){
			$this->throwIfNullParam($item);
			$this->throwExceptionIfNotItem($item);
			$this->_item = $item;
		}
		function getCustomer(){return $this->_customer; }
		function getDirector(){return $this->_director; }
		function getItem(){return $this->_item; }
		private function throwExceptionIfNotCustomer($customer){
			if(!($customer instanceof Customer)){
				throw new \Exception('Parameter is not a Customer.');
			}
		}
		private function throwExceptionIfNotAccount($account){
			if(!($account instanceof Account)){
				throw new \Exception('Parameter is not an Account.');
			}
		}
		private function throwExceptionIfNotItem($item){
			if(!($item instanceof Item)){
				throw new \Exception('Parameter is not an Item.');
			}
		}
		private function throwIfNullParam($param){
			if(is_null($param)){
				throw new \Exception('Parameter must not be null.');
			}
		}
	}
	class AddRentItemTransacServer{}
	interface Customer {
		function getID();
		function getName();
		function setID($id);
		function setName($name);

		function isNull();
	}
	class RegularCustomer implements Customer {
		private $_id;
		private $_name;
		function getID(){return $this->_id; } 
		function getName(){return $this->_name; }
		function setID($id){$this->_id = $id; } 
		function setName($name){$this->_name = $name; }

		function isNull(){return false;}
	}
	class NullCustomer implements Customer {
		private $_id = 0;
		private $_name = 'Name is not available.';
		function getID(){return $this->_id; } 
		function getName(){return $this->_name; }
		function setID($id){ throw new \Exception('Not supported yet.'); }
		function setName($name){ throw new \Exception('Not supported yet.'); }

		function isNull(){return true;}
	}	
	class RentalDatabase implements Database {
		function __construct($model){
			$this->setModel($model);
			$this->setPDO(Connection::Connect());
		}
		function add(){
			$query = "INSERT INTO `rents` SET `cust_id`=:cust_id,".
											" `account_id`=:account_id,".
											" `item_id`=:item_id;";
			$stmnt = $this->getPDO()->prepare($query);
			$stmnt->bindValue('cust_id', $this->getCustomerID($this->getModel()));
			$stmnt->bindValue('account_id', $this->getDirectorID($this->getModel()));
			$stmnt->bindValue('item_id', $this->getItemID($this->getModel()));
			return $stmnt->execute();	
		}
		function delete(){throw new \Exception('Not supported yet.');}
		function update(){throw new \Exception('Not supported yet.');}
		function get($obj){throw new \Exception('Not supported yet.');}
		private function setModel($model){$this->_model = $model; }
		private function getModel(){return $this->_model; }
		private function setPDO($pdo){$this->_pdo = $pdo; }
		private function getPDO(){return $this->_pdo;}
		private function getCustomerID($model){return $model->getCustomer()->getID(); }
		private function getDirectorID($model){return $model->getDirector()->getID(); }
		private function getItemID($model){return $model->getItem()->getID(); }
		private $_model;
		private $_pdo;
	}
