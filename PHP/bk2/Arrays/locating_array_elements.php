<?php
//searching an array
$state = ucwords(strtolower("Ohio"));
$states = array("California", "Hawaii", "Ohio", "New York");
			//find  //strings
//if(in_array($state, $states)) echo "Not to worry, $state is smoke-free!";

if(in_array($state, $states)) {
	echo 'Found Search: '.$state;
}

echo '<br>';

//Searching Associative Array Keys
$state_["Delaware"] = "December 7, 1787";
$state_["Pennsylvania"] = "December 12, 1787";
$state_["Ohio"] = "March 1, 1803";

if (array_key_exists("Ohio", $state_))
 printf("Ohio joined the Union on %s", $state_["Ohio"]);

echo '<br>';

//Searching Associative Array Values
$band = array();
$band[1] = "Linkin Park";
$band[2] = "Simple Plan";
$band[3] = "Paramore";
$band[4] = "Blink 182";
$founded = array_search("Simple Plan", $band);
if($founded) {
	echo 'Found: '. $band[$founded];
}

echo '<br>';

//Retrieving Array Keys
$stat["Delaware"] = "December 7, 1787";
$stat["Pennsylvania"] = "December 12, 1787";
$stat["New Jersey"] = "December 18, 1787";
$keys = array_keys($stat);
print_r($keys);

echo '<br>';

//Retrieving Array Values
$population = array("Ohio" => "11,421,267", "Iowa" => "2,936,760");
print_r(array_values($population));

?>

