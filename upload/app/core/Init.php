<?php

/**
* Load a directory name and php file (class)
* @param string $dirname directory
* @param string $class php file name (class)
*/
function loadDirname($dirname, $class) {
 	if(file_exists($dirname.$class)) {
       require_once $dirname.$class;
     }
}

/**
* Initialize loadDirname function
* @param string $class php file name (class)
*/
spl_autoload_register(function($class) {
	/*
	* Libraries
	*/
	loadDirname('./lib/connection/', $class.'.php');
    loadDirname('./lib/db/', $class.'.php');
	loadDirname('./lib/session/', $class.'.php');
    loadDirname('./lib/validation/factory/', $class.'.php');
    loadDirname('./lib/validation/validator/', $class.'.php');
    loadDirname('./lib/sanitize/', $class.'.php');

    loadDirname('./student_portfolio/servers/', $class.'.php');
    loadDirname('./student_portfolio/models/', $class.'.php');
    loadDirname('./student_portfolio/controllers/', $class.'.php');
    loadDirname('./student_portfolio/views/', $class.'.php');
});



