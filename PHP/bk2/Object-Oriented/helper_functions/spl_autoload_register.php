<?php
/*
spl_autoload_register — Register given function as __autoload() implementation

It is highly recommended not to use the __autoload() 
function any more. Now the spl_autoload_register() 
function is what you should consider.
*/

	if(!function_exists('classAutoLoader')){
        function classAutoLoader($class){
            $class=ucwords(strtolower($class));
            $classFile=$_SERVER['DOCUMENT_ROOT'].'/oop/bk2/Object-Oriented/helper_functions/'.$class.'.php';
            if(is_file($classFile) && !class_exists($classFile)) { 
            	include $classFile;
            }		
        }
    }
    
    spl_autoload_register('classAutoLoader');

   $obj = new myClass();
   $obj = new myClass__();

?>
