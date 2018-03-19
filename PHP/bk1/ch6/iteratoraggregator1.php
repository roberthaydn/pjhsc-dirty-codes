<?php

class MyArray implements IteratorAggregate
{
	private $arr;
	
	public function __construct()
	{
		$this->arr = array();
	}
	
	public function add( $key, $value )
	{
	if( $this->check( $key, $value ) )
		{
			$this->arr[$key] = $value;
		}
	}

	private function check( $key, $value )
	{
	if( $key == $value )
	{
		return false;
	}
		return true;
	}
	
	public function getIterator()
	{
		return new ArrayIterator( $this->arr );
	}
}

$obj = new MyArray();
$obj->add( "redhat","www.redhat.com" );
$obj->add( "php", "php" );
$it = $obj->getIterator();

while( $it->valid() )
{
	echo $it->key() . "=" . $it->current() . "\n";
	$it->next();
}

?>
