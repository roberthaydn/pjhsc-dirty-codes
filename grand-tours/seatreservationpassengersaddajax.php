<?php 

require_once 'autoload.php';

use app\controller\reservation\SeatReservationPassengersAddController;	

//hseatreservationid|fare

/*
*
*	$hseatreservationid 	= 	$_POST['hseatreservationid'];
*	$fare 					=	$_POST['fare'];
*
*/

$seatReservationPassengers = SeatReservationPassengersAddController::Create();
$seatReservationPassengers->add();

