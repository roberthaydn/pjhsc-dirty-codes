<?php

	$fruits = array(
	"apple" => "yummy",
	"orange" => "ah ya, nice",
	"grape" => "wow, I love it!",
	"plum" => "nah, not me"
	);

	$obj = new ArrayObject( $fruits );
	$it = $obj->getIterator();
	// How many items are we iterating over?
	echo "Iterating over: " . $obj->count() . " values\n";

	// Iterate over the values in the ArrayObject:
	while( $it->valid() )
	{
		echo $it->key() . "=" . $it->current() . "\n";
		$it->next();
	}

?>
