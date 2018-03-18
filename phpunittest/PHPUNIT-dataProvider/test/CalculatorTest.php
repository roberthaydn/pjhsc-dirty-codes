<?php 

//require 'app/libraries/Calculator.php';
//require 'vendor/autoload.php';

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		$this->calculator = new Calculator;
	}

	public function inputNumbers() {
		return [
			// 4,5,-2,20 => expected outPut
			[2, 2, 4],
			[2.5, 2.5, 5],
			[-3, 1, -2],
			[15, 5, 20]
		];
	}
	/**
	* @dataProvider inputNumbers
	*/
	public function testAddNumbers($x, $y, $sum) {
		
		$this->assertEquals($sum, $this->calculator->add($x, $y));	
	}

	/**
	* @expectedException InvalidArgumentException
	*/
	public function testThrowsExceptionIfNonNumericIsPassed() {
		$this->calculator->add('a', []);
	}
}



