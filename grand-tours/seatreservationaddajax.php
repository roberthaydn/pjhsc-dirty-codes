<?php 

require_once 'autoload.php';

use app\controller\reservation\SeatReservationAddController;	

//vehicle|destination|driver|hdate|hpassengers

/*

$vehicle 		= 		$_POST['vehicle'];
$destination 	=  		$_POST['destination'];
$schedDate 		=  		$_POST['schedDate'];
$schedTime 		=  		$_POST['schedTime'];
$schedAmPm 		=  		$_POST['schedAmPm'];
$driver 		= 		$_POST['driver'];
$hdate 			= 		$_POST['hdate'];
$hpassengers 	=  		$_POST['hpassengers'];

*/

$seatReservation = SeatReservationAddController::Create();
$seatReservation->add();






