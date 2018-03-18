<?php

namespace App\Libraries;

class String {

	public function stringCheck($string) {
		if(!is_string($string)) {
			throw new \InvalidArgumentException;
		} 
		return $string.' str';
 	}
 	
}

