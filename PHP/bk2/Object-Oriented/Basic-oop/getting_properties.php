<?php

class Employee
{

public $name;
public $city;
protected $wage;

function __get($propName)
	{

	echo "__get called!<br />";

	$vars = array("name","city");

	if (in_array($propName, $vars))
		{
			return $this->$propName;
		} else {
			return "No such variable!";
		}
	}
}

$employee = new Employee();
$employee->name = "Mario";
echo $employee->name."<br />";
echo $employee->age;


?>

