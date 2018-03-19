<?php
//Reference Assignment 
     $value1 = "Hello";
     $value2 =& $value1;    // $value1 and $value2 both equal "Hello"
    // $value2 = "Goodbye";   // $value1 and $value2 both equal "Goodbye" 

     echo $value2;
?>

<?php
//Local Variables
$x = 4;
 function assignx () {
     $x = 0;
     printf("\$x inside function is %d <br />", $x);
 }
 assignx();
 printf("\$x outside of function is %d <br />", $x); 


?>

<?php
// multiply a value by 10 and return it to the caller
 function x10 ($value) {
     $value = $value * 10; 
  	 return $value; 
 }

 echo x10(20);

?>

<?php
//global variable
$somevar = 15;
$str = "I'm a Global String!";

  function addit() {
     global $somevar;
     global $str;
     $somevar++;
     echo "Somevar is $somevar".$str;
 }
 addit(); 

//GLOBALS array
 $var = 15;
 $string = "String property";

  function additt() {
     $GLOBALS["var"]++;
     $GLOBALS["string"];
 }

 additt();
 echo "Somevar is ".$GLOBALS["var"].' <br>'.$GLOBALS["string"]; 

//STATIC
 function keep_track() {
     static $count  = 0;
     $count++;
     echo $count;
     echo "<br />";
 }

 keep_track();
 keep_track();
 keep_track(); 
 keep_track();

?>
