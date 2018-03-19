<?php 
/*
* Create PDO connection instance
*/
class DB {

	private $_pdo;

	public static function Create() {
		return new DB();
	}

	private function __construct() {
		$this->setPDO(Connection::Connect());
	}
	
	private function setPDO($pdo) {
		$this->_pdo = $pdo;
	}

	public function getPDO() {
		return $this->_pdo;
	}
}

