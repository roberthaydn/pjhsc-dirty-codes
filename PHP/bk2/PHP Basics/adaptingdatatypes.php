<?php
 $total = 5; // an integer
 $count = "15"; // a string
 $total += $count; // $total = 20 (an integer)
?>
<br><br>

<?php
 $total = "45 fire engines";
 $incoming = 10;
 echo $total = $incoming + $total; // $total = 55
?>

<br><br>

<?php
 $total = "1.0";
 if ($total) echo "We're in positive territory!";
?>

<br><br>

<?php
 $val1 = "1.2e3"; // 1,200
 $val2 = 5;
 echo $val1 * $val2; // outputs 2400
 echo gettype($val2); // outputs integer
?>

<br><br>

<?php
//Identifier functions
$item = 12;

printf("The variable \$item is of type array: %d <br />", is_array($item));
printf("The variable \$item is of type integer: %d <br />", is_integer($item));
printf("The variable \$item is numeric: %d <br />", is_numeric($item));
printf("The variable \$item is object: %d <br />", is_object($item));
printf("The variable \$item is resource: %d <br />", is_resource($item));
printf("The variable \$item is scalar: %d <br />", is_scalar($item));
printf("The variable \$item is string: %d <br />", is_string($item));
printf("The variable \$item is null: %d <br />", is_null($item));
printf("The variable \$item is bool: %d <br />", is_bool($item));

$identifier = "sample1";
$iDentifier = "sample2";
$identiFIER = "sample3";

echo $identiFIER;

?>