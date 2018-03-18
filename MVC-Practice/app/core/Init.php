<?php 
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 28, 10:15pm
  * Description:
      Serves as the Autoload for the blades.
  * Changes: 
  
  * Notes:

  * Warning:
*/
spl_autoload_register(function($class){
	/*
	* Data Data Objects
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