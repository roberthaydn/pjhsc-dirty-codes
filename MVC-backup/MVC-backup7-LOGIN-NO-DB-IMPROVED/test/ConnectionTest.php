<?php 

	include_once('./app/controllers/DAO/Connection.php');

	class ConnectionTest extends PHPUnit_Framework_TestCase {
		
		function test(){}
		function xtestGetConnection(){
			$connection = Connection::Connect();		
		}
						
	}
