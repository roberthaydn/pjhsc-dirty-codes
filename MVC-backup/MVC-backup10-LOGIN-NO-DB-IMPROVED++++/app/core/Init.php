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
    /*
    * servers
    */
    if (file_exists('../app/servers/'.$class.'.php')) {
       require_once '../app/servers/'.$class.'.php';
    }  
    /***************************************************************/
    /*
    * account - models
    */
    if (file_exists('../app/models/account/'.$class.'.php')) {
       require_once '../app/models/account/'.$class.'.php';
    }
    if (file_exists('../app/models/customers/'.$class.'.php')) {
       require_once '../app/models/customers/'.$class.'.php';
    }
    if (file_exists('../app/models/items/'.$class.'.php')) {
       require_once '../app/models/items/'.$class.'.php';
    }

    /*
    * account - controllers
    */
    if (file_exists('../app/controllers/addinventory/'.$class.'.php')) {
       require_once '../app/controllers/addinventory/'.$class.'.php';
    }
    if (file_exists('../app/controllers/signin/'.$class.'.php')) {
       require_once '../app/controllers/signin/'.$class.'.php';
    }

    /*
    * account - views
    */
    if (file_exists('../app/views/addinventory/'.$class.'.php')) {
       require_once '../app/views/addinventory/'.$class.'.php';
    }
    if (file_exists('../app/views/signin/'.$class.'.php')) {
       require_once '../app/views/signin/'.$class.'.php';
    }
  
});

?>
