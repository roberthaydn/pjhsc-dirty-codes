<?php 

require_once 'autoload.php';

use app\controller\reservation\SeatReservationPassengersRemovePersonController;	

//id

/*
*
*	$id 	= 	$_POST['id'];
*	
*
*/

@$id = $_POST['id'];

$seatReservationPassengersRemovePerson = SeatReservationPassengersRemovePersonController::Create();
echo $seatReservationPassengersRemovePerson->update($id);

