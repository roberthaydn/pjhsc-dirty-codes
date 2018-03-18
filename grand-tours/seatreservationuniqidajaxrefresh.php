<?php

require_once 'autoload.php';

use app\lib\datetime\SimpleDate;
use app\controller\reservation\SeatReservationAddController;

$simpleDate = SimpleDate::Create();

//unique id from tbl_seat_reservation
$reservationID = SeatReservationAddController::Create();

?>

<input type="hidden" name="hseatreservationid" id="hseatreservationid" value="<?= $reservationID->getSeatReservationID(); ?>">

