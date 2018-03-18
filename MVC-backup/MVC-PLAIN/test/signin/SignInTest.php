<?php
    
    include_once('SignInController.php');
    include_once('SignInView.php');
    include_once('SignInAccount.php');
    include_once('AccountDatabase.php');

    class SignInTest extends PHPUnit_Framework_TestCase {

        private $_view;
        private $_controller;
        private $_account;

        function setUp(){
            $this->_view = new SignInView();
            $this->_controller = new SignInController();
            $this->_account = new SignInAccount();
        }
        function tearDown(){
            $this->_view = null;
            $this->_controller = null;
            $this->_account = null;
        }
        function testSignIn_ValidAccount(){
            $this->_account->setUserName('jon');
            $this->_account->setPlainPassword('password');
            $this->_controller->setView($this->_view);
            $this->_controller->requestSignIn($this->_account);
            $this->_controller->requestedSignIn(); //blade output.
        }
        function testSignIn_InvalidAccount(){
        	$this->_controller->setView($this->_view);
        	$this->_controller->requestSignIn($this->_account);
        	$this->_controller->requestedSignIn(); //blade output.
        }
        
    }

	