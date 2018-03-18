<?php 

	class AccountTest extends PHPUnit_Framework_TestCase{


		function test(){

			$id = 1;
			$userName = '';
			$plainPassword = '';

			$account = new LogInAccount();
			$account->setID($id);
			$account->setUserName($userName);
			$account->setPlainPassword($plainPassword);

			$this->assertEquals(1, $account->getID());
			$this->assertEquals('', $account->getUserName());
			$this->assertEquals('', $account->getPlainPassword());
			$this->assertNull($account->getEncryptedPassword());
		}

	}

	interface Account{

		function setID($id);
		function setUserName($userName);
		function setPlainPassword($plainPassword);

		function getID();
		function getUserName();
		function getPlainPassword();
		function getEncryptedPassword();
	}
	class LogInAccount implements Account{

		private $_id;
		private $_userName;
		private $_plainPassword;
		private $_encryptedPassword;

		function setID($id){
			$this->_id = $id;
		}
		function setUserName($userName){
			$this->_userName = $userName;
		}
		function setPlainPassword($plainPassword){
			$this->_plainPassword = $plainPassword;
		}
	 	function setEncryptedPassword($encryptedPassword){
			$this->_encryptedPassword = $encryptedPassword;
		}

		function getID(){
			return $this->_id;
		}
		function getUserName(){
			return $this->_userName;
		}
		function getPlainPassword(){
			return $this->_plainPassword;
		}
		function getEncryptedPassword(){
			return $this->_encryptedPassword;
		}
	}
