<?php

// Class Alias
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
//Determining Whether a Class Exists
// Check that the class exists before trying to use it
if (class_exists('MyClass')) {
    $myclass = new MyClass();
} else {
	echo 'Not Exist';
}

echo '<br><br>';

//get_class()
echo get_class($a);

//get_class_methods()
class myclass {
    // constructor
    function myclass()
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

echo '<br><br>';

$class_methods = get_class_methods('myclass');
// or
$class_methods = get_class_methods(new myclass());

foreach ($class_methods as $method_name) {
    echo "$method_name\n";
}

echo '<br><br>';

//get_class_vars()
class myclasss {

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

$my_class = new myclasss();

$class_vars = get_class_vars(get_class($my_class));

foreach ($class_vars as $name => $value) {
    echo "$name : $value\n";
}


?>