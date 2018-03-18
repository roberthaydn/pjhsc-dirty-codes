<?php 

require_once 'auth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\accounts\AccountsInfoController;

if($auth) :

$accountData = AccountsInfoController::Create();	

	//Header Initialization
	Header::Create(
		//Create links and display an items for the main menu
		//to separate the link and item, you must add "|"...
		//ex.
		// link               item(display text)
		// active|https://google.com|google 
		//MAIN MENU
		array(
			'active|reservation.php|SEAT RESERVATION', 
			'inactive|account.php|MY ACCOUNT',
			'inactive|logout.php|LOG OUT'
		),

		//SECOND MENU
		array(
			'active|reservation.php|Available Vans',
		)
	);

?>

	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12">
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
</script>

<?php

else: 
	require_once 'login.php';
endif; 

?>





