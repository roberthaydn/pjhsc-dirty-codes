<?php 

//var_dump($_POST);
$checkboxArr = $_POST;

/*
echo '<pre>';
echo var_export($checkboxArr);
echo '</pre>';
*/

function check($checkboxArr, $selected) {
	foreach ($checkboxArr as $value) {
		return @$value[$selected];
	}
}

$c1 = check($checkboxArr, 0);
$c2 = check($checkboxArr, 1);
$c3 = check($checkboxArr, 2);
$c4 = check($checkboxArr, 3);
$c5 = check($checkboxArr, 4);

echo $c1.' '.$c2.' '.$c3.' '.$c4.' '.$c5;

?>

