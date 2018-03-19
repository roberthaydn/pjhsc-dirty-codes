<?php 

class Sanitize {
	/**
	* Remove html/javascript/php tags
	* @static
	* @return string
	*/
	public static function Escape($string) {
		return htmlentities($string, ENT_QUOTES, '');
	}
}
