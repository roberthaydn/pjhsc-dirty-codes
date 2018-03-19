<?php
//class.factorial.php
class Factorial
{
	private $_result = 1;
	private $_number;
	
	public function __construct($number)
	{
		$this->_number = $number;
		for($i=2; $i<=$number; $i++)
		{
			$this->_result*=$i;
		}
		echo "__construct() executed. ";
	}

	public function __destruct()
	{
		echo "<br> Object Destroyed.";
	}


	public function factorial($number)
	{
		$this->_number = $number;
		for($i=2; $i<=$number; $i++)
		{
			$this->_result*=$i;
		}
		echo "factorial() executed. ";
	}

	public function showResult()
	{
		echo "Factorial of {$this->_number} is {$this->_result}. ";
	}
}
?>
