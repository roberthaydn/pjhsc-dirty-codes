<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\reservation\SeatReservationPassengersInfoController;
use app\controller\reservation\SeatReservationInfoController;
use app\lib\datetime\SimpleDate;

if($auth) :

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RECEIPT - vsGrandTours</title>
    <!-- CDN LINKS -->
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- CDN LINKS -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <style type="text/css">
		@media print{
		    .no-print, .no-print *
			{
			    display: none !important;
			}
		}
	</style>
</head>
<body>

<?php	

$simpleDate = SimpleDate::Create();
$currentDate = $simpleDate->getFormat('m/d/Y/h:i/A');
$explodedCurrentDate = explode('/', $currentDate);
$currentTime = $explodedCurrentDate[0].'/'.$explodedCurrentDate[1].'/'.$explodedCurrentDate[2];

@$seat_reservation_id = $_GET['id'];

$seatReservationPassengersInfo = SeatReservationPassengersInfoController::Create();
$seatReservationInfo = SeatReservationInfoController::Create();

$rowsSeatReservationPassengersInfo = $seatReservationPassengersInfo->getData($seat_reservation_id);	
$rowsSeatReservationInfo = $seatReservationInfo->dataForSeatPassengers($seat_reservation_id);
	
	//seat reservation
	foreach ($rowsSeatReservationInfo as $row) {
		$id = $row['Id'];
		$vehicle = $row['vehicle'];
		$destination = $row['destination'];
		$schedule = $row['schedule'];
		$fare = $row['fare'];
		$driver = $row['driver'];
		$date = $row['date'];

		$explodedDestination = explode("|", $destination); echo '<br>';
		$explodedSched = explode('/', $schedule); echo '<br>';
		$explodedDate = explode('/', $date);

		//schedule
		//$explodedSched[0].'/'.$explodedSched[1].'/'.$explodedSched[2].' - '.$explodedSched[3].' '.$explodedSched[4];

		//date
		//$explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4];
	}
?>

<div class="container ">
	<div class="row no-gutters">
		<div class="col-12" class="no-print">
			<div class="float-right no-print">
				<a href="#" class="no-print"><i class="fa fa-print fa-5 no-print" onClick="window.print();"></i></a>
			</div>
		</div>
<?php
	//seat reservation passengers
  	foreach ($rowsSeatReservationPassengersInfo as $row) 
  	{
		$seat_no = $row['seat_no'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];

		$explodedDate = explode('/', $date);
	
		($firstname=='empty') ? $firstname = '' : null;
		($lastname=='empty') ? $lastname = '' : null;
		($destination=='empty') ? $destination = '' : null;										
			
?>
		<div class="col-3">
			<div class="r-wrapper">
				<p class="r-address r-content text-center">vsGrandTours Catbalogan San Bartolome St, Catbalogan City Proper, Catbalogan City, 6700 Samar</p>
				<p class="r-time r-content">Time: <span class="r-span">xxx</span></p>
				<p class="r-date r-content">Date: <span class="r-span">xxx</span></p>
				<p class="r-seat-no r-content">Seat No: <span class="r-span"><?=$seat_no; ?></span></p>
				<p class="r-depart r-content">Depart: <span class="r-span">xxx</span></p>
				<p class="r-arrival r-content">Arrival: <span class="r-span">xxx</span></p>
				<p class="r-driver r-content">Driver: <span class="r-span"><?=$driver;?></span></p>
				<p class="r-plate-number r-content">Plate No. <span class="r-span"><?=$vehicle;?></span></p>
				<p class="r-name r-content">Name: <span class="r-span"><?=ucwords(strtolower($firstname.' '.$lastname));?></span></p>
			</div>
		</div>
<?php
	}	
?>
	</div>
</div>

<?php
else: 
	require_once 'alogin.php';
endif; 

?>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Swiper -->
<script type="text/javascript" src="js/swiper.min.js"></script>
<!-- Toastr -->
<script type="text/javascript" src="js/toastr.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

	});
</script>
</body>



