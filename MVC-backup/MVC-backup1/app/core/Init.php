<?php 
	
spl_autoload_register(function($class){
	/*
	* Database Data Objects
	*/
	if (file_exists('../app/controllers/DAO/'.$class.'.php')) {
       require_once '../app/controllers/DAO/'.$class.'.php';
    }
    /*
	* Models
	*/
    if (file_exists('../app/models/'.$class.'.php')) {
       require_once '../app/models/'.$class.'.php';
    } 
    /*
	* Controllers
	*/
    if (file_exists('../app/controllers/'.$class.'.php')) {
       require_once '../app/controllers/'.$class.'.php';
    }
    /*
	* Views
	*/
    if (file_exists('../app/views/'.$class.'.php')) {
       require_once '../app/views/'.$class.'.php';
    } 
});


?>