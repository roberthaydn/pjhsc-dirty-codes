<?php 

class Hello {

	public static function Create() {
		return new hello();
	}

	public function __construct() {}

	public function hello($name) {
		return 'hello '.$name;
	}
}