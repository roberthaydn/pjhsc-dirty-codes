<?php

class Input {

	public function issetPost($field) {
		return isset($_POST[$field]);
	}

	public function issetGet($field) {
		return isset($_GET[$field]);
	}

	public function post($field) {
		return $_POST[$field];
	}

	public function get($field) {
		return $_GET[$field];
	}
}

class InputFactory {
	public static function __construct() {
		return new Input();
	}
}


?>
