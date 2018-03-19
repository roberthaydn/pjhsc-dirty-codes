<?php
//retrieving the current array key
$capitals = array("Ohio" => "Columbus", "Iowa" => "Des Moines", "stop" => "stop");
echo "<p>Can you name the capitals of these states?</p>";

while($key = key($capitals)) {
 if(key($capitals) == "stop") break;
 printf("%s <br />", $key);
 next($capitals);
}

//retrieving the current array value
$capitals_ = array("Ohio" => "Columbus", "Iowa" => "Des Moines");
echo "<p>Can you name the states belonging to these capitals?</p>";

while($capital_ = current($capitals_)) {
 printf("%s <br />", $capital_);
 //or echo $capital_
 next($capitals_);
}

echo '<br>';

//Moving the Pointer to the Next Array Position
$fruits = array("apple", "orange", "banana");
echo $fruit = next($fruits); // returns "orange"
echo $fruit = next($fruits); // returns "banana"

echo '<br>';echo '<br>';

$array = array('step one', 'step two', 'step three', 'step four');

// by default, the pointer is on the first element
echo current($array) . "<br />\n"; // "step one"

// skip two steps
next($array);
next($array);
echo current($array) . "<br />\n"; // "step three"

// reset pointer, start again on step one
reset($array);
echo current($array) . "<br />\n"; // "step one"

//Moving the pointer to the first array position
$fruits = array("apple", "orange", "banana");
$fruit = current($fruits); // returns "apple"
$fruit = end($fruits); // returns "banana"

//using 
echo '<br><br>';
$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
print_r($bar);

echo '<br><br>';

//using each 
$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');
reset($fruit);

while (list($key, $val) = each($fruit)) {
    echo "$key => $val\n";
}

echo '<br><br>';

//passing an array to a function
$fruits_ = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits_, 'test_print');


?>

