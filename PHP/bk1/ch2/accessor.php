<?php
class Student
{
	private $name;
	private $roll;
	private $comment;

	public function setName($name)
	{
		$this->name = $name;
	}
	public function setRoll($roll)
	{
		$this->roll = $roll;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getRoll()
	{
		return $this->roll;
	}
	public function helloWorld() {
		return $this->comment;
	}
	public function setHelloWorld($hello) {
		$this->comment = $hello;
	}
}

$stud = new Student;
$stud->setName("sample name");
echo $stud->getName();

$stud->setRoll("<br>Hi There!~");
echo $stud->getRoll();

$stud->setHelloWorld("Hello World!!!");
echo $stud->helloWorld();

?>
