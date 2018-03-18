<?php

//namespace App\Libraries;
ob_start();
session_start();

class Session {

	public static function create($session, $session_value) {
		return $_SESSION[$session] = $session_value;
	}

	public static function setSession($session) {
		return isset($_SESSION[$session]);
	}

	public static function emptySession($session) {
		return empty($_SESSION[$session]);
	}

	public static function unsetSession($session) {
		unset($_SESSION[$session]);
	}
}

?>


