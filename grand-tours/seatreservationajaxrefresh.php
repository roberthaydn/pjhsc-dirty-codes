<?php 

require_once 'autoload.php';

use app\controller\accounts\AccountsAdminLoginController;
use app\controller\accounts\AccountsLoginController;
use app\controller\reservation\SeatReservationInfoController;
use app\lib\session\Session;
use app\lib\encryption\Encryption;

Session::ObStart();
Session::SessionStart();

$authAccountAdmin = AccountsAdminLoginController::Create();
$authAccount = AccountsLoginController::Create();

$seatReservationInfo = SeatReservationInfoController::Create();
$rows = $seatReservationInfo->data();
$num = 1;

	foreach ($rows as $row) 
	{
  		$Id 			= $row['Id'];
		$vehicle 		= $row['vehicle'];
		$destination 	= $row['destination'];
		$schedule 		= $row['schedule'];
		$fare 			= $row['fare'];
		$driver 		= $row['driver'];
		$date 			= $row['date'];
		$passengers 	= $row['passengers'];
		$state			= $row['state'];

		$explodedDestination = explode("|", $destination);
		$explodedSched = explode('/', $schedule);
		$explodedDate = explode('/', $date);

		if($state==1)
		{

			if($passengers == 13) $passengers = '13 <span style="font-size:20px;">(FULL)</span>';

?>
		<div class="seat-reservation z-depth-1" style="/*TempStyle*/float:left;margin-right:30px;">	
		<span class="num z-depth-1"><?= $num++;?></span>		
			<div class="seat-reservation-info">
				<p class="vehicle"><?= strtoupper($vehicle); ?></p>
				<p class="destination">From <?= strtoupper($explodedDestination[0]); ?> &nbsp;<i class="fa fa-arrow-right"></i>&nbsp; <?= strtoupper($explodedDestination[1]); ?></p>							
				<p class="schedule">Schedule: &nbsp;<strong><?= $explodedSched[0].'/'.$explodedSched[1].'/'.$explodedSched[2].' - '.$explodedSched[3].' '.$explodedSched[4]; ?></strong></p>	
				<p class="fare">Fare: &nbsp;<strong><?= '₱ '.$fare; ?></strong></p>	
				<p class="driver">Driver: <?= ucwords(strtolower($driver)); ?></p>
				<p class="date">Date Published: <i><?= $explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4]; ?></i></p>				
				<p class="passengers">Passengers: <span><?= $passengers; ?></span></p>				
			</div>
			<?php
				if($authAccountAdmin->auth()) {
			?>
				<a href="seatreservationpax.php?id=<?=$Id;?>" class="btn-seat-reservation btn-info btn-sm"><i class="fa fa-check">&nbsp; </i> View &nbsp;</a>
				<a href="seatreservationconfirm.php?c=save&id=<?=$Id;?>" class="btn-seat-reservation btn-default btn-sm"><i class="fa fa-check">&nbsp; </i> Save &nbsp;</a>
				<a href="seatreservationconfirm.php?c=del&id=<?=$Id;?>" class="btn-seat-reservation btn-danger btn-sm"><i class="fa fa-minus-circle">&nbsp; </i> Delete &nbsp;</a>				               	
			<?php 
				}
				if($authAccount->auth()) {			
					$encryptID = Encryption::Simple_crypt($Id, 'e');
					$encryptDestination = Encryption::Simple_crypt($destination, 'e');
			?>
				<a href="passengers.php?b80bb7740288fda1f201890375a60c8f=<?=$encryptID.'&984d866b4696362085af4ffcb82377d2='.$encryptDestination;?>" class="btn-proceed btn btn-default"> Proceed &nbsp;<i class="fa fa-long-arrow-right"></i></a>
			<?php
				}	
			?>
		</div>
		<!--<script type="text/javascript">
			$(document).ready(function() {
				var id = "<php echo $Id ?>";
				var dotClass = '.seat-reservation-a'+id;
				$(dotClass).click(function() {
					$('.hseatreservationid').text(id);
				});
			});
		</script>-->
<?php		
		} /*else {
			echo 'Seat Reservation is currently unavailable...';
		}*/
	}
?>




