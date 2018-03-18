<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 29, 09:40pm
  * Changes: 
 		[echo 'connected'] deleted in constructor.
 		changed to private accessor getConnectionString().
 		changed to private accessor in constructor.
 		deleted getInstance class. - Moved to Connection.
 		connect() command added to Connection. (from get instance class.)
 		rename connect() to Connect().
  * Notes:

  * Warning:
*/
class Connection {

	private $_IP = 'localhost',
			$_ROOT = 'root',
			$_PASSWORD = '',
			$_DB = 'simplelogin';	
	
	private function getConnection() {
		try {
			return new PDO($this->getConnectionString(), $this->getUser(), $this->getPassword());
		} catch(PDOException $exception) {
			echo "Connection error: " . $exception->getMessage();
		}
	}

	public static function Connect() {
		return new Connection();
	}

	private function __construct() {
		$this->getConnection();
	}

	private function getConnectionString(){
		return 'mysql:host='.$this->getIP().'; dbname='.$this->getDB();
	}

	private function getIP(){
		return $this->_IP;
	}

	private function getDB(){
		return $this->_DB;
	}	

	private function getUser(){
		return $this->_ROOT;
	}

	private function getPassword(){
		return $this->_PASSWORD;
	}
}
