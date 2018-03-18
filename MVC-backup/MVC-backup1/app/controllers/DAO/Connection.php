<?php

class Connection {

	public $_connection;

	function getConnection($connection) {
		return $this->_connection = $connection;
	}
}

?>