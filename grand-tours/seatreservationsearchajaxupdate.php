<?php

require_once 'autoload.php';

use app\controller\reservation\SeatReservationSearchRecordsController;

$seatReservationSearchRecords = SeatReservationSearchRecordsController::Create();
$seatReservationSearchRecords->updateSearch();
$seatReservationSearchRecords->updateFilter();


