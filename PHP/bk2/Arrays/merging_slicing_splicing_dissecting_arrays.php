<link rel="stylesheet" type="text/css" href="style.css">
<?php
echo '<pre>';

//Merging Arrays
echo '<span>Merging Arrays</span><br>';
$face = array("J", "Q", "K", "A");
$numbered = array("2", "3", "4", "5", "6", "7", "8", "9");
$cards = array_merge($face, $numbered);
shuffle($cards);
print_r($cards);

//Recursively Appending Arrays
echo '<span>Recursively Appending Arrays</span><br>';
$class1 = array("John" => 100, "James" => 85);
$class2 = array("Micky" => 78, "John" => 45, "James" => 23);
$classScores = array_merge_recursive($class1, $class2);
print_r($classScores);

//Combining Two Arrays
echo '<span>Combining Two Arrays</span><br>';
$abbreviations = array("AL", "AK", "AZ", "AR");
$states = array("Alabama", "Alaska", "Arizona", "Arkansas");
                          //key          //value
$stateMap = array_combine($abbreviations,$states);
print_r($stateMap);

//Slicing an Array
echo '<span>Slicing an Array<br></span>';
$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Colorado", "Connecticut");
$subset = array_slice($states, 4);
print_r($subset);

//Splicing an Array
echo '<span>Splicing an Array</span><br>';
$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Connecticut");
$subset = array_splice($states, 2);
print_r($states);
print_r($subset);

//Calculating an Array Intersection
echo '<span>Calculating an Array Intersection</span><br>';
$array1 = array("OH", "CA", "NY", "HI", "CT");
$array2 = array("OH", "CA", "HI", "NY", "IA");
$array3 = array("TX", "MD", "NE", "OH", "HI");
$intersection = array_intersect($array1, $array2, $array3);
print_r($intersection);


//Calculating Associative Array Intersections
echo '<span>Calculating Associative Array Intersections<br></span>';
$array1 = array("OH" => "Ohio", "CA" => "California", "HI" => "Hawaii");
$array2 = array("50" => "Hawaii", "CA" => "California", "OH" => "Ohio");
$array3 = array("TX" => "Texas", "MD" => "Maryland", "OH" => "Ohio");
$intersection = array_intersect_assoc($array1, $array2, $array3);
print_r($intersection);

//Calculating Associative Array Differences
echo '<span>Calculating Associative Array Differences</span>';
$array1 = array("OH" => "Ohio", "CA" => "California", "HI" => "Hawaii");
$array2 = array("50" => "Hawaii", "CA" => "California", "OH" => "Ohio");
$array3 = array("TX" => "Texas", "MD" => "Maryland", "KS" => "Kansas");
$diff = array_diff_assoc($array1, $array2, $array3);
print_r($diff);


echo '</pre>';

?>

