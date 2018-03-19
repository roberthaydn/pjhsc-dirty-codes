<?php

function __autoload($class)
{
	include_once("class.{$class}.php");
}

//autoload stdClass();
$s = new stdClass();
$sample1->name = "Hasin";
$sample2 = $sample1;
$sample2->name = "Afif";
echo $sample1->name.'<br>';

//autoload loadclass;
$s = new loadclass(5, 2);
$s->prop;
$s->prop1;
echo $s->prop * $s->prop1;


?>
