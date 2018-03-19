<?php
// function returns an associative array containing the names of all properties and
// their corresponding values defined within the class specified by class_name.

class myclass {

    var $var1; // this has no default value...
    var $var2 = "xyz";
    var $var3 = 100;
    private $var4; // PHP 5

    // constructor
    function myclass() {
        // change some properties
        $this->var1 = "foo";
        $this->var2 = "bar";
        return true;
    }

}

$my_class = new myclass();

$class_vars = get_class_vars(get_class($my_class));

foreach ($class_vars as $name => $value) {
    echo "$name : $value<br>";
}

?>