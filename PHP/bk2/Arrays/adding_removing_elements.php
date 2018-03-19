<?php

//Adding a Value to the Front of an Array
$states = array("Ohio", "New York");
array_unshift($states, "California", "Texas");
//array_unshift($states, "<span style='color:red'>California</span>", "<span style='color:red'>Texas</span>");

foreach ($states as $state) {
	vprintf("%s<br>", $state);
}
echo '<br>';

//Adding a Value to the End of an Array
$states = array("Ohio", "New York");
array_push($states, "California", "Texas");

foreach ($states as $state) {
	vprintf("%s<br>", $state);
}

echo '<br>';

//Removing a Value from the Front of an Array
$states = array("Ohio", "New York", "California", "Texas");

for ($i=0; $i < 2; $i++) { 
	array_shift($states);
}

foreach ($states as $state) {

	vprintf("%s<br>", $state);
}

echo '<br>';

//Removing a Value from the End of an Array 
$states = array("Ohio", "New York", "California", "Texas");
	
$state = array_pop($states);
$state = array_pop($states);
array_pop($states);

foreach ($states as $state) {

	vprintf("%s<br>", $state);
}


?>

