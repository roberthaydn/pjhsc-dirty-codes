<?php

class Connection {
	
	private $_mysql_Host;
	private $_mysql_Db;
	private $_mysql_Username;
	private $_mysql_Password;

	public function __construct($host, $db, $user, $pwd) {
		$this->_mysql_Host = $host;
		$this->_mysql_Db = $db;
		$this->_mysql_Username = $user;
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
		return 'Could not connect to database...';
	}	
}

class finalConnection {
	public static function create($host, $db, $user, $pwd) {
		return new Connection($host, $db, $user, $pwd);
	}
}

$connect = finalConnection::create('host', 'database', 'root', 'pass123');
echo $connect->connect();
