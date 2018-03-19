<?php

$city = array(1 => "calbayog", 2 => "catbalogan", 3 => "tacloban");

$states = array ("Ohio" => 
					array("population" => "11,353,140", "capital" => "Columbus"),
				"Nebraska" => 
					array("population" => "1,711,263", "capital" => "Omaha"));


echo $states["Ohio"]["population"];


for($i=0; $i<= 10; $i++) {
	$stat = array($i => array('value'.$i => 'insideVal'.$i));
	echo $stat[$i]['value'.$i].'<br>';
}

//associative arrays
//$state["Delaware"] = "December 7, 1787";
//$state["Pennsylvania"] = "December 12, 1787";
//$state["New Jersey"] = "December 18, 1787";
//$state["Hawaii"] = "August 21, 1959";

//Populating Arrays with a Predefined Value Range

$n = range(1, 10);
$even = range(0, 19, 3);
$letters = range("A", "Z");

//foreach ($letters as $key ) {
//	echo $key.'<br>';
//}

//Testing for an Array
$states = array("Florida");
$state = "Ohio";
printf("\$states is an array: %s <br />", (is_array($states) ? "TRUE" : "FALSE"));
printf("\$state is an array: %s <br />", (is_array($state) ? "TRUE" : "FALSE"));

if(is_array($states)) {
	echo 'Array!';
} else {
	echo 'Not Array!';
}

?>
