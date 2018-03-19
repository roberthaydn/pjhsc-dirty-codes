<?php

//Determining Whether a Class Exists
// Check that the class exists before trying to use it
class MyClass {



}

if (class_exists('MyClass')) {
    $myclass = new MyClass();
    echo 'Class Exist';
} else {
	echo 'Not Exist';
}

echo '<br><br>';

?>