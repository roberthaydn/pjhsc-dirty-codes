<?php
/*

get_object_vars — Gets the properties of the given object

*/

class foo {
    private $a;
    public $b = 1;
    public $c;
    private $d;
    static $e;
   
    public function test() {
        var_dump(get_object_vars($this));
    }
}

echo '<pre>';

$test = new foo;
var_dump(get_object_vars($test));
$test->test();

echo '</pre>';


?>
