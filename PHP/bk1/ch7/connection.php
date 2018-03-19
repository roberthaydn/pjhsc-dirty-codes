<?php

class ConnectionMysqli {

	private $_localhost;
	private $_root;
	private $_password;
	private $_db;

	private function connectDB($localhost, $root, $password, $db) {
		$this->_localhost = $localhost;
		$this->_root = $root;
		$this->_password = $password;
		$tihs->_db = $db;

		$mysqli = new mysqli($localhost, $root, $password, $db);

		if (mysqli_connect_errno()) {

			echo("Failed to connect, the error message is : ".
			mysqli_connect_error());
			exit();

		} else {
			echo("Connected to Database.");
		}
	}

	public function connect() {
		$this->connectDB("localhost", "root", "abriel123123", "oop");
	}
}

$c = new ConnectionMysqli;
$c->connect(); 

?>
