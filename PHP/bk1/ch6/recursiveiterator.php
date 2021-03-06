<?php

	$arr = array(
	"john"=>array("name"=>"John Abraham", "sex"=>"M", "age"=>27),
	"lily"=>array("name"=>"Lily Bernard", "sex"=>"F", "age"=>37),
	"ayesha"=>array("name"=>"Ayesha Siddika", "sex"=>"F", "age"=>26),
	"afif"=>array("name"=>"Afif", "sex"=>"M", "age"=>21)
	);

class MyRecursiveIterator extends ArrayIterator implements RecursiveIterator
{
	public function hasChildren()
	{
		return is_array($this->current());
	}
	public function getChildren()
	{
		return new MyRecursiveIterator($this->current());
	}
}

$persons = new ArrayObject($arr);
$MRI = new RecursiveIteratorIterator(new MyRecursiveIterator($persons));

foreach ($MRI as $key=>$person)
echo $key." : ".$person."<br><hr>";

?>
