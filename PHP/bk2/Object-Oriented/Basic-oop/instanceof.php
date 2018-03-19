<?php

class Dota {

	public $str;
	public $arr;

	public function char($char) {
		return $this->str = $char; 
	}

	public function str() {
		$this->arr = array();
		$this->arr = range("a", "z");

		foreach ($this->arr as $key => $value) {
			echo $value.' ';
		}
	}
}


$char = new Dota; 
echo $char->char(" Kardel ", "");
$char->str();

/*
echo '<pre>';
print_r($char);
echo '</pre>';
*/

//instanceof
if($char instanceof Dota) {
	//echo 'TRUE';
}


?>

