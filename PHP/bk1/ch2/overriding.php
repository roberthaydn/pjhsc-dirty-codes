<?
class SuperClass
{

	public final function someMethod() //preventing from overriding into another class - use [final]
	{
	//..something here
		return "LOl";
	}
}

class SubClass extends SuperClass
{
	public function someMethod()
	{
	//..something here again, but it wont run
	}
}


?>
