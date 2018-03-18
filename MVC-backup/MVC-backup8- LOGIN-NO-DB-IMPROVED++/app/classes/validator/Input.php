<?php

class Input {

	public static function issetPost($field) {
		return isset($_POST[$field]);
	}

	public static function issetGet($field) {
		return isset($_GET[$field]);
	}

	public static function post($field) {
		return $_POST[$field];
	}

	public static function get($field) {
		return $_GET[$field];
	}
}

?>
