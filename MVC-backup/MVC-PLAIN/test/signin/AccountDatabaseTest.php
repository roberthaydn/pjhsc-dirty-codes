<?php
	include_once('SignInAccount.php');
	include_once('AccountDatabase.php');
	class AccountDatabaseTest extends PHPUnit_Framework_TestCase{

		private $_db;
		private $_account;
		private $_db_account;

		function setUp(){
            $this->_db = new AccountDatabase();
            $this->_account = new SignInAccount();
            $this->_db_account = $this->_db->get($this->_account);
		}
		function tearDown(){
			$this->_db = null;	
			$this->_account = null;
			$this->_db_account = null;
		}
		function testAccountDB_getValidAccount(){
            $this->_account->setUserName('jon');
            echo $this->_db_account->getID();
            echo $this->_db_account->getUserName();
            echo $this->_db_account->getPlainPassword();
            echo $this->_db_account->getEncryptedPassword();
        }
        function testAccountDB_getInvalidAccount(){
            $this->_account->setUserName('ramsey');
            echo $this->_db_account->getID();
            echo $this->_db_account->getUserName();
            echo $this->_db_account->getPlainPassword();
            echo $this->_db_account->getEncryptedPassword();
        }
	}