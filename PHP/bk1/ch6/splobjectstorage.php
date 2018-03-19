<?php

$os = new SplObjectStorage();
$person = new stdClass(); // a standard object
$person->name = "Its not a name";
$person->age = "100";

$os->attach($person); //attached in the storage

foreach ($os as $object)
{
	echo "<pre>";
	print_r($object);
	echo "</pre><br>";
}

$person->name = "New Name"; //change the name
echo str_repeat("-",30)."\n"; //just a format code

foreach ($os as $object)
{
	echo "<pre>";
	print_r($object); //you see that it changes the original object
	echo "</pre><br>";
}

$person2 = new stdClass();
$person2->name = "Another Person";
$person2->age = "80";
$os->attach($person2);

echo str_repeat("-",30)."\n";

foreach ($os as $object)
{
	echo "<pre>";
	print_r($object);
	echo "</pre><br>";
}

echo "<br>".$os->contains($person);//seek
$os->rewind();

echo "<br>".$os->current()->name;
$os->detach($person); //remove the object from collection

echo "<br>".str_repeat("-",30)."\n";

foreach ($os as $object)
{
	echo "<pre>";
	print_r($object);
	echo "</pre><br>";
}

?>
