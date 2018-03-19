<?php

include_once("../ch2/class.emailer.php");
echo class_exists("Emailer");
//returns true otherwise false if doesn't exist
include_once("../ch2/class.emailer.php");

if(class_exists("Emailer"))
{
	$emailer = new Emailer("hasin@pageflakes.com");
}
else
{
	die("A necessary class is not found");
}


?>
