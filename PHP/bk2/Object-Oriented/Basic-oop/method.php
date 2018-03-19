<?php

//invoking the method
//$object->methodName();

#Declaring Method
/*
scope function functionName()
{
// Function body goes here
}
//For example, a public method titled calculateSalary() might look like this:
public function calculateSalary()
{
return $this->wage * $this->hours;
}
*/


class Visitors
{
	public function greetVisitor()
	{
		echo "Hello<br />";
	}
	function sayGoodbye()
	{
		echo "Goodbye<br />";
	}
}

//Visitors::greetVisitor();
$v = new Visitors();
$v->greetVisitor();

$visitor = new Visitors();
$visitor->sayGoodbye();


?>

