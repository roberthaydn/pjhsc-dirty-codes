<link rel="stylesheet" type="text/css" href="style.css">
<?php

echo '<pre>';
//Reversing Array Element Order
echo '<span>Reversing Array Element Order</span><br>';

$states = array("Delaware", "Pennsylvania", "New Jersey");
print_r(array_reverse($states));

echo '<br>';

//Flipping Array Keys and Values
echo '<span>Flipping Array Keys and Values</span><br>';

$state = array("key1" => "Delaware", "key2" => "Pennsylvania", "key3" =>"New Jersey");
$state = array_flip($state);
print_r($state);

echo '<br>';

//Sorting an Array 
echo '<span>Sorting an Array </span><br>';
$grades = array(42, 98, 100, 100, 43, 12);
sort($grades, SORT_NUMERIC);
print_r($grades);

echo '<br>';

//Sorting an Array while maintaining key and value pair 
echo '<span>Sorting an Array while maintaining key and value pair</span><br>';

$names = array("abriel", "nathan", "edmar", "mj", "brian");
sort($names, SORT_STRING);
print_r($names);

echo '<br>';

//Sorting an Array in Reverse Order While Maintaining Key/Value Pairs
echo '<span>Sorting an Array in Reverse Order While Maintaining Key/Value Pairs</span><br>';
$states = array("Delaware", "Pennsylvania", "New Jersey");
arsort($states);
print_r($states);


echo '<span>Sorting an Array Naturally</span><br>';
$states = array("picture1.jpg", "PICTURE30.jpg", "picture10.jpg", "picture3.jpg");
natcasesort($states);
print_r($states);


echo '<br><br>';
//Sorting According to User-Defined Criteria
echo '<span>Sorting According to User-Defined Criteria</span><br>';
$dates = array('10-10-2011', '2-17-2010', '2-16-2011','1-01-2013', '10-10-2012');
sort($dates);
echo "<p><span>Sorting the array using the sort() function:</span></p>";
print_r($dates);
natsort($dates);
echo "<p><span>Sorting the array using the natsort() function: </span></p>";
print_r($dates);

function DateSort($a, $b) {
// If the dates are equal, do nothing.
if($a == $b) return 0;
// Disassemble dates
list($amonth, $aday, $ayear) = explode('-',$a);
list($bmonth, $bday, $byear) = explode('-',$b);
// Pad the month with a leading zero if leading number not present
$amonth = str_pad($amonth, 2, "0", STR_PAD_LEFT);
$bmonth = str_pad($bmonth, 2, "0", STR_PAD_LEFT);
// Pad the day with a leading zero if leading number not present
$aday = str_pad($aday, 2, "0", STR_PAD_LEFT);
$bday = str_pad($bday, 2, "0", STR_PAD_LEFT);
// Reassemble dates
$a = $ayear . $amonth . $aday;
$b = $byear . $bmonth . $bday;
// Determine whether date $a > $date b
return ($a > $b) ? 1 : -1;
}
usort($dates, 'DateSort');
echo "<p><span>Sorting the array using the user-defined DateSort() function: </span></p>";
print_r($dates);


echo '</pre>';

	


?>

