<?php

//Determining the Size of an Array
$garden = array("cabbage", "peppers", "turnips", "carrots", "tulips");
echo count($garden);

echo '<br>';

//Counting Array Value Frequency
$states = array("Ohio", "Iowa", "Arizona", "Iowa", "Ohio", "Iowa", "Iowa", "Iowa", "Iowa", "Iowa");
$stateFrequency = array_count_values($states);
//$stateFrequency = count(array_count_values($states));
//print_r(end($stateFrequency));
/*print_r($stateFrequency);
$arrUnique = array_unique(array_reverse($states));
while(list($key, $value) = each($arrUnique)) {
	echo $key.' '.$value;
}
*/


echo '<br>';

//Determining unique array values
$states = array("Ohio", "Iowa", "Arizona", "Iowa", "Ohio");
$uniqueStates = array_unique($states);
print_r($uniqueStates);


?>

