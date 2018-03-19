<?
//class.student.php
class Student
{
	private $properties = array();

	function __get($property)
	{
		return $this->properties[$property];
	}
	function __set($property, $value)
	{
		$this->properties[$property]="AutoSet {$property} as: ".$value;
	}
}

//create Object
$st = new Student();
$st->name = "Afif<br>";
$st->roll=16;

$st->name1 = "Wweraw<br>";
$st->roll1=17;

echo $st->name."\n";
echo $st->roll.'<br>';

echo $st->name1."\n";
echo $st->roll1.'<br>';

?>
