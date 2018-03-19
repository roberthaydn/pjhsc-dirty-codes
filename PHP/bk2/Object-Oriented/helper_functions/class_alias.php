<?php

// Class Alias
//The class_alias()  function creates a class alias, allowing the class to be referred to by more than one
//name. Its prototype follows:
class foo { 

}
class_alias('foo', 'bar', 'wew');

$a = new foo;
$b = new bar;

echo '<br><pre>';
// the objects are the same
var_dump($a == $b, $a === $b);
var_dump($a instanceof $b);

// the classes are the same
var_dump($a instanceof foo);
var_dump($a instanceof bar);

var_dump($b instanceof foo);
var_dump($b instanceof bar);

echo '</pre><br>';

?>