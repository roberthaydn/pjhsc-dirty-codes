<?php
/*

get_parent_class — Retrieves the parent class name for object or class

*/

class dad {
    function dad()
    {
    // implements some logic
    }
}

class child extends dad {
    function child()
    {
        echo "I'm " , get_parent_class($this) , "'s son<br>";
    }
}

class child2 extends dad {
    function child22()
    {
        echo "I'm " , get_parent_class('child2') , "'s son too<br>";
    }
}

$foo = new child;
$bar = new child2;
$bar->child22();

?>
