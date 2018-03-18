<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\reservation\SeatReservationPassengersInfoController;
use app\controller\reservation\SeatReservationInfoController;

if($auth) :

@$seat_reservation_id = $_GET['id'];

$seatReservationPassengersInfo = SeatReservationPassengersInfoController::Create();
$seatReservationInfo = SeatReservationInfoController::Create();

$rowsSeatReservationPassengersInfo = $seatReservationPassengersInfo->getData($seat_reservation_id);	
$rowsSeatReservationInfo = $seatReservationInfo->dataForSeatPassengers($seat_reservation_id);

	//Header Initialization
	Header::Create(
		//Create links and display an items for the main menu
		//to separate the link and item, you must add "|"...
		//ex.
		// link               item(display text)
		// active|https://google.com|google 
		//MAIN MENU
		array(
			'active|seatreservation.php|SEAT RESERVATION', 
			'inactive|accountreg.php|ACCOUNT REGISTRATION',
			'inactive|accounts.php|ACCOUNTS',
			'inactive|alogout.php|LOG OUT'
		),

		//SECOND MENU
		array(
			'inactive|seatreservation.php|Available Vans',
			'inactive|seatreservationadd.php|Add New Van',
			'active|seatreservationrecords.php|Vans Records'
		)
	);
?>

	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="seat-reservation z-depth-1">
						<div class="seat-reservation-breadcrumbs"><a href="seatreservationrecords.php"><b><i class="fa fa-long-arrow-left"></i> </b> Back </a></div>		
					</div>
					<div class="table-responsive">
						<table class="table table-bordered z-depth-1">
						    <thead>
						      <tr>
								<?php 
									foreach ($rowsSeatReservationInfo as $row) {
										$id = $row['Id'];
										$vehicle = $row['vehicle'];
										$destination = $row['destination'];
										$schedule = $row['schedule'];
										$fare = $row['fare'];
										$driver = $row['driver'];
										$date = $row['date'];
										$passengers = $row['passengers'];
										$state = $row['state'];

										$explodedDestination = explode("|", $destination);
										$explodedSched = explode('/', $schedule);
										$explodedDate = explode('/', $date);
										
								?>
						        	<th colspan="3" class="th p-3">
						        		<div class="seat-reservation-info-pax"><?= strtoupper($vehicle); ?></div>
						        		<div class="seat-reservation-info-pax">Destination: <?= strtoupper($explodedDestination[0]); ?> <i class="fa fa-arrow-right"></i> <?= strtoupper($explodedDestination[1]); ?></div>	
						        		<div class="seat-reservation-info-pax">Schedule: <?= $explodedSched[0].'/'.$explodedSched[1].'/'.$explodedSched[2].' - '.$explodedSched[3].' '.$explodedSched[4]; ?></div>						        	
						        	</th>	
						        	<th colspan="3" class="th p-3">
						        		<div class="seat-reservation-info-pax">Fare: <?= '<b>₱ '.$fare.'</b>'; ?></div>
						        		<div class="seat-reservation-info-pax">Driver: <?= ucwords(strtolower($driver)); ?></div>
						        		<div class="seat-reservation-info-pax">Date Published: <?= $explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4]; ?></div>	
						        	</th>
								<?php 
									}	
								?>
						      </tr>
						    </thead>
						    <thead>
								<tr>
									<th>Seat No.</th>
									<th>Fare</th>
									<th>Username</th>
									<th>Name</th>
									<th>Destination</th>
									<th>Date Occupied</th>
								</tr>
						    </thead>
						    <tbody>
						      
						      	<?php
							      	foreach ($rowsSeatReservationPassengersInfo as $row) 
							      	{
							      		$id = $row['Id'];
										$seat_reservation_id = $row['seat_reservation_id'];
										$seat_no = $row['seat_no'];
										$fare = $row['fare'];
										$account_id = $row['account_id'];
										$username = $row['username'];
										$firstname = $row['firstname'];
										$lastname = $row['lastname'];
										$destination = $row['destination'];
										$date = $row['date'];
										$state = $row['state'];

										$explodedDate = explode('/', $date);

										($username=='empty') ? $username = '' : null;	
										($firstname=='empty') ? $firstname = '' : null;
										($lastname=='empty') ? $lastname = '' : null;
										($destination=='empty') ? $destination = '' : null;
																			
								?>	
									<tr>
										<td class="text-center"><strong><?= $seat_no; ?></strong></td>
										<td><?= '₱ '.$fare; ?></td>
										<td><?= $username; ?></td>									
										<td><strong><?= ucwords(strtolower($firstname.' '.$lastname)); ?></strong></td>
										<td><?= $destination; ?></td>
										<td><i><?= ($date=='empty') ? $date = '' : $explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4]; ?></i></td>
									</tr>								
								<?php 
									}			
								?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br>
	</section>
<?php 

//Footer Init
Footer::Create();


?>

<script type="text/javascript">
	$(document).ready(function() {
	
	});

	/*function goBack() {
	    window.history.back();
	}*/
</script>

<?php
else: 
	require_once 'alogin.php';
endif; 

?>






