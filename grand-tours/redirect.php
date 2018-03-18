<?php 

require_once 'autoload.php';

use app\lib\encryption\Encryption;

$id = 'ajRxcUR1ZUc5YjJHNTZOVFNvZ1FSdz09'; //id

echo Encryption::Simple_crypt($id, 'd');

/*
if(isset($_GET['c'])) {
	if (is_array($_GET['c'])) 
	{
		echo '<h5 class="txt-top txt-color"><b>Reservation is now completed!</b></h5>';
		echo '<div class="check-seat-selected">Selected seat no.</div>';
		foreach($_GET['c'] as $value)
		{
	      ///echo '<div class="check-seat-selected"><i class="fa fa-check"></i> Seat '.$value.'</div>';							      
	    }
	   // echo '<div class="cancel-reservation">To cancel reservation go to /../../.</div>';
	} 
}
/
*/

?>

