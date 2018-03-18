<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\reservation\SeatReservationInfoController;
use app\controller\reservation\SeatReservationPassengersInfoController;

if($auth) :

@$c = $_GET['c'];
@$id = $_GET['id'];

$seatReservationInfo = SeatReservationInfoController::Create();
$seatReservationPassengersInfo = SeatReservationPassengersInfoController::Create();
	
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
			'active|seatreservation.php|Available Vans',
			'inactive|seatreservationadd.php|Add New Van',
			'inactive|seatreservationrecords.php|Vans Records'
		)
	);
?>

	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="seat-reservation z-depth-1">
						<?php 				
							$seatReservationInfo->updateDataSaveDel($c, $id);
							$seatReservationPassengersInfo->updatePassengersDataSaveDel($c, $id);
						?>		
					</div>
					<div class="seatreservationajaxrefresh">
					</div>
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
		seatReservationInfo();
		//removeResponse();
	});

	function seatReservationInfo() 
	{
		return (function worker() {
			 $.ajax({
			    url: 'seatreservationajaxrefresh.php',
			    success: function(data) {
			      $('.seatreservationajaxrefresh').html(data);
			    },
			    complete: function() {
			      // Schedule the next request when the current one's complete
			      setTimeout(worker, 5000);
			    }
			  });
		})();
	}

	/*function removeResponse() {
	    setTimeout(function(){
	    	$('.txt-top').hide();
	    }, 3000);
	}*/
</script>

<?php
else: 
	require_once 'alogin.php';
endif; 

?>






