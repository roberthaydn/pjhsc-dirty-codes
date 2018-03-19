<?php

class SimpleClass
{
    // property declaration
    public $var = 'a default value';
    public static $lol = 'lol';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }

    public function _isset() {
    	if(isset($this)) {
    		echo '<br>set';					
    	} else {
    		echo '<br>not set';
    	}
    }
}

//
$obj = new SimpleClass;
$obj->displayVar();
$obj->_isset();

?>