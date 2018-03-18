<?php
	class CustomerTest extends PHPUnit_Framework_TestCase{

		private $_customer;
		private $_nullCustomer;
		function setUp(){
			$this->_customer = new RegularCustomer();	
			$this->_nullCustomer = new NullCustomer();
		}
		function testCustomer(){
			$id = 1;
			$name = 'name';
			$this->_customer->setID($id);
			$this->_customer->setName($name);
			$this->assertEquals($id, $this->_customer->getID());
			$this->assertEquals($name, $this->_customer->getName());
			$this->assertEquals(false, $this->_customer->isNull());
		}
		function testNullCustomer(){
			$id = 0;
			$name = 'Name is not available.';
			$this->assertEquals($id, $this->_nullCustomer->getID());
			$this->assertEquals($name, $this->_nullCustomer->getName());
			$this->assertEquals(true, $this->_nullCustomer->isNull());
		}
	}