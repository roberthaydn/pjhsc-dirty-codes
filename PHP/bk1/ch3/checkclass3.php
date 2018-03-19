<?
class ParentClass
{
	/**public function __construct() {
	*	echo 'I\'m a constructor....';
	*}
	*/
}
class ChildClass extends ParentClass
{	
	/**
	* public function __construct() {
	*	parent::__construct();
	*	echo 'I\'m also a aconstructor....';
	* }
	*/

}

$c = new ParentClass;
$cc = new ChildClass;

echo get_class($c).'<br>';
echo get_class($cc)

?>
