<?php 
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Abriel
  * Last Modified : Sept. 28, 2:56AM
  * Description:
      Serves as the Autoload for the blades.
  * Changes: 
      Added autoload classes
        • models/databases/ (interfaces)
        • classes/session/
        • classes/utils/
        • session/validator/
  * Notes:

  * Warning:
*/
spl_autoload_register(function($class) {
  	/*
  	* Data Objects Access
  	*/
	 if (file_exists('../app/controllers/DAO/'.$class.'.php')) {
       require_once '../app/controllers/DAO/'.$class.'.php';
    }

    /*
    * Databases
    */
    if (file_exists('../app/models/databases/'.$class.'.php')) {
       require_once '../app/models/databases/'.$class.'.php';
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

    /*
    * Session
    */
    if (file_exists('../app/classes/session/'.$class.'.php')) {
       require_once '../app/classes/session/'.$class.'.php';
    } 

    /*
    * Utils
    */
    if (file_exists('../app/classes/utils/'.$class.'.php')) {
       require_once '../app/classes/utils/'.$class.'.php';
    } 

   /*
    * Validator
    */
    if (file_exists('../app/classes/validator/'.$class.'.php')) {
       require_once '../app/classes/validator/'.$class.'.php';
    }  
});

?>
