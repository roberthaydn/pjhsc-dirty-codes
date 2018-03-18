<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\accounts\AccountsAccountsController;
use app\controller\accounts\AccountsResetPasswordController;
use app\controller\reservation\SeatReservationInfoController;

if($auth) :

$accounts = AccountsAccountsController::Create();
$rPassword = AccountsResetPasswordController::Create();
$seatReservationInfo = SeatReservationInfoController::Create();
	
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
			'active|seatreservation.php|Van Information',
			'inactive|seatreservationadd.php|Add New Van',
			'inactive|seatreservationrecords.php|Vans records'
		)
	);
	
@$c = $_GET['c'];
@$id = $_GET['id'];

if($c == 'save') 
{
	$confirm = '<i class="fa fa-check fa-2"></i> Do you want to save this data?';
	$btn = 'btn-default';
	$btnTxt = '<i class="fa fa-check">&nbsp; </i> Save Reservation';
} 
else if($c == 'del')
{
	$confirm = '<i class="fa fa-minus-circle fa-2"></i> Do you want to delete this data?';
	$btn = 'btn-danger';
	$btnTxt = '<i class="fa fa-minus-circle">&nbsp; </i> Delete Reservation';
}

$link = 'seatreservation.php?c='.$c.'&id='.$id;

?>
 	
	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12">
				<?php
					$state = $seatReservationInfo->readDataSaveDelete('state', $id);
					$vehicle = $seatReservationInfo->readDataSaveDelete('vehicle', $id);
					$destination = $seatReservationInfo->readDataSaveDelete('destination', $id);
					$schedule = $seatReservationInfo->readDataSaveDelete('schedule', $id);
					$fare = $seatReservationInfo->readDataSaveDelete('fare', $id);
					$driver = $seatReservationInfo->readDataSaveDelete('driver', $id);
					$date = $seatReservationInfo->readDataSaveDelete('date', $id);
					$passengers = $seatReservationInfo->readDataSaveDelete('passengers', $id);
					$explodedDestination = explode("|", $destination);
					$explodedSched = explode('/', $schedule);
					$explodedDate = explode('/', $date);

					if($state==1)
					{
				?>
					<div class="seat-reservation z-depth-1" style="/*float:left;margin-left:15px;margin-right:15px;*/">
						<h5 class="txt-top"><?=$confirm;?></h5>
					</div>

					<div class="seat-reservation z-depth-1" style="/*float:left;margin-left:15px;margin-right:15px;*/">			
						<div class="seat-reservation-info">
							<p class="vehicle"><?= strtoupper($vehicle); ?></p>
							<p class="destination">From: <?= strtoupper($explodedDestination[0]); ?> &nbsp;<i class="fa fa-arrow-right"></i>&nbsp; <?= strtoupper($explodedDestination[1]); ?></p>							
							<p class="schedule">Schedule: <strong><?= $explodedSched[0].'/'.$explodedSched[1].'/'.$explodedSched[2].' - '.$explodedSched[3].' '.$explodedSched[4]; ?></strong></p>
							<p class="fare">Fare: <strong><?= '₱'.$fare; ?></strong></p>	
							<p class="driver">Driver: <?= ucwords(strtolower($driver)); ?></p>
							<p class="date">Date: <?= $explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4]; ?></p>				
							<p class="passengers">Passengers: <span><?= $passengers; ?></span></p>				
						</div>

						<!--<a href="#!" class="btn btn-default"> Proceed </a>-->
						<!--<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-check">&nbsp; </i> Save &nbsp;</button>
						<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-minus-circle">&nbsp; </i> Delete &nbsp;</button>-->
						<!--<a href="#!" class="btn btn-default"> Proceed </a>-->
						<a href="<?=$link;?>" class="btn <?=$btn;?> btn-sm"><?=$btnTxt;?> &nbsp;</a>
						<a href="#!" onclick="goBack()" class="btn btn-blue-grey btn-sm"><i class="fa fa-arrow-left">&nbsp; </i> Back &nbsp;</a>				               	
					</div>
				<?php		
					}
				?>
				</div>
			</div>
		</div>
		<br><br><br><br><br>
		<br><br><br><br><br>
	</section>
	
<?php 

//Footer Init
Footer::Create();

?>

<script type="text/javascript">
	$(document).ready(function() {
	});

	function goBack() {
	    window.history.back();
	}
</script>

<?php
else: 
	require_once 'alogin.php';
endif; 

?>




