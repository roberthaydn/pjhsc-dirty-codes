<?php

	include_once('./app/controllers/PersonControllerFactory.php');
	include_once('./app/models/PersonModelFactory.php');
	include_once('./app/views/PersonViewFactory.php');
	include_once('./app/views/IPersonView.php');
	include_once('./app/models/IPersonModel.php');
	include_once('./app/controllers/IController.php');
	
	class PersonMvcTest extends PHPUnit_Framework_TestCase{
		
		private $_personModel;
		private $_personController;
		private $_personView;

		function setUp(){
			$this->_personModel = PersonModelFactory::Create();
			$this->_personView = PersonViewFactory::Create();
			$this->_personController = PersonControllerFactory::Create();

			$this->_personController->setPersonModel($this->_personModel);
			$this->_personController->setPersonView($this->_personView);
		}	
		function tearDown(){

			$this->_personModel = null;
			$this->_personController = null;
			$this->_personView = null;
		}

		function testFactoryViewInstance(){
			$this->assertTrue($this->_personView instanceof IPersonView);
		}
		function testFactoryModelInstance(){
			$this->assertTrue($this->_personModel instanceof IPersonModel);
		}
		function testFactoryControllerInstance(){
			$this->assertTrue($this->_personController instanceof IController);
		}
		function testStandalonePersonModel(){

			$data = 'Jon';
			$this->assertNotNull($this->_personModel);
			$this->_personModel->setFirstName($data);
			$firstName = $this->_personModel->getFirstName();
			
			$this->assertEquals($firstName, $data);
		}
		function testStandalonePersonView(){
			
			$this->assertNotNull($this->_personView);
		}
		function testStandalonePersonController(){

			$this->assertNotNull($this->_personView);
			$this->assertNotNull($this->_personModel);
			$this->assertNotNull($this->_personController);
		}
		/**
		* @expectedException
		*/
		function testPersonControllerInstance_PassNotViewType_ThrowException(){
			
			$this->_personController = 
				PersonControllerFactory::Create($this->_personModel, 'invalid type');
		}
		/**
		* @expectedException
		*/
		function testPersonControllerInstance_PassNotModelType_ThrowException(){

			$this->_personController = 
				PersonControllerFactory::Create('invalid type', $this->_personView);
		}
		/**
		* @expectedException
		*/
		function testPersonControllerInstance_PassNullView_ThrowException(){

			$this->_personController = 
				PersonControllerFactory::Create($this->_personModel, null);
		}
		/**
		* @expectedException
		*/
		function testPersonControllerInstance_PassNullModel_ThrowException(){

			$this->_personController = 
				PersonControllerFactory::Create(null, $this->_personView);
		}
	}