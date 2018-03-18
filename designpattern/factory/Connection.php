<?php

//namespace Designpattern\Factory;

interface IConnection {
	public function setHost($host);
	public function setDB($db);
	public function setUserName($user);
	public function setPassword($pwd);
}

class Connection implements IConnection {
	
	private $_mysql_Host;
	private $_mysql_Db;
	private $_mysql_Username;
	private $_mysql_Password;

	public function setHost($host) {
		$this->_mysql_Host = $host;
	}
	public function setDB($db) {
		$this->_mysql_Db = $db;
	}
	public function setUserName($user) {
		$this->_mysql_Username = $user;
	}
	public function setPassword($pwd) {
		$this->_mysql_Password = $pwd;
	}
	
	public function connect() {
		
		$mysqlHost = $this->_mysql_Host;
		$mysqlDb = $this->_mysql_Db;
		$mysqlUsername = $this->_mysql_Username;
		$mysqlPass = $this->_mysql_Password;
		
		if($mysqlHost == 'host' && $mysqlDb == 'database' && $mysqlUsername == 'root' && $mysqlPass == 'pass123') {
			return 'Connected '.$this->_mysql_Host.' '.$this->_mysql_Db.' '.$this->_mysql_Username.' '.$this->_mysql_Password.'';
		}  
		die('Could not connect to database...');
	}	
}

class finalConnection {
	public static function create() {
		$con = new Connection();
		$con->setHost('host');
		$con->setDB('database');
		$con->setUserName('root');
		$con->setPassword('pass123');
		return $con->connect();
	}
}


