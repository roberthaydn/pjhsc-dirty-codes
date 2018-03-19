<?php

$em = array(
	"abriel" => "abriel@pfsflorist.net",
	"email1" => "email1@pfsflorist.net",
	"email2" => "email2@pfsflorist.net",
	"email3" => "email3@pfsflorist.net",
	"email4" => "email4@pfsflorist.net"
	);

$users = new ArrayObject($em);

//$users = new ArrayObject(array("hasin"=>"hasin@pageflakes.com",
//"afif"=>"mayflower@phpxperts.net",
//"ayesha"=>"florence@pageflakes.net"));

$iterator = $users->getIterator();

while ($iterator->valid())
{
	echo "{$iterator->key()}'s Email address is {$iterator->current()}\n<br>";
	$iterator->next();
}

?>
