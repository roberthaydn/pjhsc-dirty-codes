<?
class ParentClass
{
	public function getClass() {
		echo get_class($this); //output = ChildClass
		//echo get_class(); //output = ParentClass
	}
}
class ChildClass extends ParentClass
{	


}

$cc = new ChildClass;
$cc->getClass();


?>
