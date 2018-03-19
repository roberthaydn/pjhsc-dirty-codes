<?php
/*

method_exists — Checks if the class method exists

*/

class ParentClass {

   //function doParent() { }
}

class ChildClass extends ParentClass { }

$p = new ParentClass();
$c = new ChildClass();

echo '<pre>';

// all return true
//var_dump(method_exists($p, 'doParent'));
//var_dump(method_exists($c, 'doParent'));

//var_dump(is_callable(array($p, 'doParent')));
//var_dump(is_callable(array($c, 'doParent')));

if(method_exists($p, 'doParent')) {
	echo 'True!';
} else {
	echo 'False';
}

echo '</pre>';

?>