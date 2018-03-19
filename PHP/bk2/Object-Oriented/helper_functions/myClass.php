<?php
//__autoload — Attempt to load undefined class

class myClass {
    public function __construct() {
        echo "myClass init'ed successfuly!!!<br>";
    }
}


//you don't need some code like this anymore
/*

include_once("./myClass.php");
include_once("./myFoo.php");
include_once("./myBar.php");

$obj = new myClass();
$foo = new Foo();
$bar = new Bar();

*/

?>
