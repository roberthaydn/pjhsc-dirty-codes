<?php

use App\Libraries\String;

class StringTest extends PHPUnit_Framework_TestCase
{
	public function testStringCheck() {
		$str = new String;
		$this->assertEquals('hello str', $str->stringCheck('hello'));
	}	
}
