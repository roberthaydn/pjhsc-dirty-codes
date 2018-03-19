<?php

class Employee
{
	public $name;
	public $city;
	public $gender;
	protected $wage;

	function __get($propName)
	{

	echo "<br>__get called!<br />";
	
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
	$employee->
	$employee->city = "Catbalogan, City";

	echo $employee->name."<br />";
	echo $employee->city;
	echo $employee->n;
	echo $employee->swserawer;

?>

