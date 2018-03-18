<?php
	/**
	*	Central Database for adding items.
	*	@version 0.1
	*	@author Abriel I, Ronnel R.	
	*/
	class InventoryDatabase implements Database {

		private $_pdo;
		private $_item;

		function __construct($item){
			if(!($item instanceof Item)) throw new \Exception('Not an instance of item.');
			$this->setItem($item);
			$this->setPDO(Connection::Connect());
		}
		function add(){
			$query = "INSERT INTO `inventory` SET `name`=:name";
			$stmnt = $this->getPDO()->prepare($query);
			$stmnt->bindValue('name', $this->getItem()->getname());
			return $stmnt->execute();
		}
		function delete(){ throw new \Exception('Not supported yet.'); }
		function update(){ throw new \Exception('Not supported yet.'); }
		function get($obj){ throw new \Exception('Not supported yet.'); }

		private function setItem($item){$this->_item = $item;} 
		private function getItem(){return $this->_item;}
		private function setPDO($pdo){$this->_pdo = $pdo; }
		private function getPDO(){return $this->_pdo;}
	}