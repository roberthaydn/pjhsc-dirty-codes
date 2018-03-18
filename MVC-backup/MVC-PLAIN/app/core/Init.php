<?php 
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Abriel
  * Last Modified : Oct. 5, 8:30PM
  * Description:
      Serves as the Autoload for the blades.
  * Changes: 

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
    /*
    * servers
    */
    if (file_exists('../app/servers/'.$class.'.php')) {
       require_once '../app/servers/'.$class.'.php';
    }  
    /***************************************************************/
});

?>
