<?php
//function returns an array containing all method names defined by the class class_name.
class myclass {
    // constructor
    function myclass_()
    {
        return(true);
    }
    // method 1
    function myfunc1()
    {
        return(true);
    }

    // method 2
    function myfunc2()
    {
        return(true);
    }
}

$class_methods = get_class_methods('myclass_');
// or
$class_methods = get_class_methods(new myclass());

foreach ($class_methods as $method_name) {
    echo "$method_name\n";
}

?>

