<?php
class GenderFilter extends FilterIterator
{
	private $GenderFilter;
	public function __construct( Iterator $it, $gender="F" )
	{
		parent::__construct( $it );
		$this->GenderFilter = $gender;
	}
	//your key point to implement filter
	public function accept()
	{
		$person = $this->getInnerIterator()->current();
		if( $person['sex'] == $this->GenderFilter )
		{
			return TRUE;
		}
			return FALSE;
	}
}

$arr = array(
array("name"=>"John Abraham", "sex"=>"M", "age"=>27),
array("name"=>"Lily Bernard", "sex"=>"F", "age"=>37),
array("name"=>"Ayesha Siddika", "sex"=>"F", "age"=>26),
array("name"=>"Afif", "sex"=>"M", "age"=>2)
);

$persons = new ArrayObject( $arr );
$iterator = new GenderFilter( $persons->getIterator() );

foreach( $iterator as $person )
{
	echo $person['name'] . "\n<br>";
}

echo str_repeat("-",30)."\n<br>";

$persons = new ArrayObject( $arr );
$iterator = new GenderFilter( $persons->getIterator() ,"M");

foreach( $iterator as $person )
{
	echo $person['name'] . "\n<br>";
}

?>
