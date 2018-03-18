<?php 

//require 'app/libraries/Calculator.php';
//require 'vendor/autoload.php';

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function testAddNumbers() {
		$cal = new Calculator;
		$values = [
			[2, 2, 4],
			[2.5, 2.5, 5],
			[-3, 1, -2]
		];

		foreach ($values as $num) {
		  $this->assertEquals($num[2], $cal->add($num[0], $num[1]));
		}
	}

	/**
	* @expectedException InvalidArgumentException
	*/
	public function testThrowsExceptionIfNonNumericIsPassed() {
		$calc = new Calculator;
		$calc->add('a', []);
	}
}



