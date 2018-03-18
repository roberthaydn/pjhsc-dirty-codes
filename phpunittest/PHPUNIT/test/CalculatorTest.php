<?php 

//require 'app/libraries/Calculator.php';
//require 'vendor/autoload.php';

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function testAddNumbers() {
		$cal = new Calculator;
		$this->assertEquals(4, $cal->add(2,2));
		$this->assertEquals(5, $cal->add(2.5,2.5));
		$this->assertEquals(-5, $cal->add(-8,3));
	}

	/**
	* @expectedException InvalidArgumentException
	*/
	public function testThrowsExceptionIfNonNumericIsPassed() {
		$calc = new Calculator;
		$calc->add('a', []);
	}
}



