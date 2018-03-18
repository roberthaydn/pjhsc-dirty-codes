<?php 
	
	include_once('./app/controllers/PersonControllerFactory.php');
	include_once('./app/views/PersonViewFactory.php');
	include_once('./app/models/PersonModelFactory.php');

	class PersonControllerTest extends PHPUnit_Framework_TestCase{


		/**
		* @test
		*/
		function Controller_RequestPersonFirstName(){

			$model = PersonModelFactory::Create();
			$model->setFirstName('Jon');
			$view = PersonViewFactory::Create();
			$controller = PersonControllerFactory::Create();
			$controller->setPersonModel($model);
			$controller->setPersonView($view);

			$controller->RequestPersonFirstName();

			$requestedData = $controller->RequestedPersonFirstNameData();
			
			$this->assertEquals('Jon', $requestedData);
		}
	}