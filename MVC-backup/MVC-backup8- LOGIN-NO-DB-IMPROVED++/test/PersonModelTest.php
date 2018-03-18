<?php 

	include_once('./app/models/PersonModelFactory.php');
	include_once('./app/models/IPersonModel.php');

	class PersonModelTest extends PHPUnit_Framework_TestCase{

		function testPersonModel(){

			$id = 1;
			$firstname = '';
			$lastname = '';

			$person = PersonModelFactory::Create();

			$person->setID($id);
			$person->setFirstName($firstname);
			$person->setLastName($lastname);

			$this->assertEquals(1, $id);
			$this->assertEquals('', $person->getFirstName());
			$this->assertEquals('', $person->getLastName());
		}



	}