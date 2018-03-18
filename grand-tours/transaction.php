<?php 

require_once 'auth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\accounts\AccountsInfoController;
use app\controller\reservation\SeatReservationTransactionController;
use app\lib\encryption\Encryption;
use app\lib\datetime\SimpleDate;

//account information
$accountDataa = AccountsInfoController::Create();
$accountIDD = $accountDataa->getData('id');

if($auth) :

//checkSeatNo
function checkSeatNo() {
	
	if(isset($_GET['c']) && isset($_GET['b80bb7740288fda1f201890375a60c8f'])) {
		/*
		echo '<h5 class="txt-top txt-color"><b>Reservation is now completed!</b></h5>';
		echo '<div class="check-seat-selected">Selected seat no.</div>';
		echo '<br>';
		*/
		echo '<h5 class="txt-top z-depth-1" style="padding:15px;font-size:16px;font-weight:400;color:green;background-color:#ffffff;line-height:130%;margin-bottom:20px;">Reservation is successfully completed!</h5>';
		/********************************************/
		//echo '<div class="seat-reservation">Recent Transaction should be display here.</div>';
		/*******************************************/
		/*echo '<h5 class="seat-reservation txt-top txt-color style="padding:25px;"><b>Reservation is now completed!</b></h5>';*/

		//account information
		$accountData = AccountsInfoController::Create();
		$accountID = $accountData->getData('id');
		$accountUsername = $accountData->getData('username');
		$accountFirstname = $accountData->getData('firstname');
		$accountLastname = $accountData->getData('lastname');

		//seat reservation id
		@$id = $_GET['b80bb7740288fda1f201890375a60c8f'];
		$decrpytId = Encryption::Simple_crypt($id, 'd');

		//hidden fare
		$hfare = $_GET['hfare'];

		//hidden state
		$hstate = $_GET['hstate'];

		//destination
		$destination = $_GET['destination'];

		//date
		$simpleDate = SimpleDate::Create();
		$date = $simpleDate->getFormat('m/d/Y/h:i/A');
	
		if (is_array($_GET['c'])) 
		{
			foreach($_GET['c'] as $seat)
			{	
				/*if($seat=='Z3RqH') {
					echo '<div class="seat-reservation z-depth-1" style="padding:20px;"><a href="#!" style="color:red;" onclick="goBack()"><i class="fa fa-arrow-left">&nbsp; </i>Back</a> <span style="font-size:18px;"><b>Please select a seat no.</b></h5></span>';
					return false;
				}*/

		      	($seat=='xNRVZ') ? $seat='1' : null;	
		      	($seat=='DbvcH') ? $seat='2' : null;
		      	($seat=='3eQum') ? $seat='3' : null;
		      	($seat=='FBMa3') ? $seat='4' : null;
		      	($seat=='GQvLS') ? $seat='5' : null;
		      	($seat=='O4U2x') ? $seat='6' : null;
		      	($seat=='54R1O') ? $seat='7' : null;
		      	($seat=='qWfjc') ? $seat='8' : null;
		      	($seat=='g31Pr') ? $seat='9' : null;
		      	($seat=='uay5K') ? $seat='10' : null;
		      	($seat=='xSlP2') ? $seat='11' : null;
		      	($seat=='OY0nC') ? $seat='12' : null;
		      	($seat=='7DDtA') ? $seat='13' : null;

		      	/*echo 'update - (checkbox)Seat no. '.$seat.'<br>';
		      	echo 'update - Destination:'.$destination.'<br>';
				echo 'update - Date'.$simpleDate->getFormat('m/d/y - h:i:s A');
				echo 'update - Account ID'.$accountID.'<br>';
				echo 'update - Account Username'.$accountUsername.'<br>';
				echo 'update - Account Firstname'.$accountFirstname.'<br>';
				echo 'update - Account Lastname'.$accountFirstname.'<br>';
				echo 'seat reservation id - assert:'.$decrpytId.'<br>';
				echo 'assert - Fare:'.$hfare.'<br>';
				echo 'assert - State:'.$hstate.'<br>';*/

					$dataArr = array(

					//user info
					$accountID, //[0]
					$accountUsername, //[1]
					$accountFirstname, //[2]
					$accountLastname, //[3]

					//seat reservation id
					$decrpytId, //[4]

					//fare
					$hfare, //[5]

					//state
					$hstate, //[6]

					//destination
					$destination, //[7]

					//date
					$date, //[8]

					//seat_no
					$seat //[9]

				);

					$transtac = SeatReservationTransactionController::Create();
					$transtac->transac($dataArr);
		    }
		   // echo '<div class="cancel-reservation">To cancel reservation go to /../../.</div>';
		}
	}
}

//radio picup
function radioPickUp() {
	/*if(isset($_GET['c']) && isset($_GET['b80bb7740288fda1f201890375a60c8f'])) {
		
	}*/
}

//init radioPickUp
radioPickUp();
//destination


function msgAlert() {
	if(isset($_GET['c']) && isset($_GET['b80bb7740288fda1f201890375a60c8f'])) {
		echo '
			<div class="msg-alert">
				<h5 class="txt-top">Within 30mins you should at waiting area. &nbsp; <a href="#!" class="msg-close"><span><i class="fa fa-close"></i></span></a></h5>
			</div>
		';
	}
}

	//Header Initialization
	Header::Create(
		//Create links and display an items for the main menu
		//to separate the link and item, you must add "|"...
		//ex.
		// link               item(display text)
		// active|https://google.com|google 
		//MAIN MENU
		array(
			'inactive|reservation.php|SEAT RESERVATION', 
			'active|account.php|MY ACCOUNT',
			'inactive|logout.php|LOG OUT'
		),

		//SECOND MENU
		array(
			'inactive|account.php|Personal Information',
			'active|transaction.php|My Transaction',
			'inactive|info.php|Update Info',
			'inactive|changepassword.php|Change Password'
		)
	);

?>

	<section class="panel-main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<?php 
						msgAlert();
					?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php 
						checkSeatNo(); 
					?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php 
			
					$servername = "localhost";
					$username = "root";
					$password = "";

					try {

					    $conn = new PDO("mysql:host=$servername;dbname=db_grandtours", $username, $password);
					    // set the PDO error mode to exception
					    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					    
						function readData($account_id, $conn) 
						{
							$sql = "SELECT * FROM `tbl_seat_reservation_passengers` WHERE `account_id`=:account_id AND `state`=1 ORDER BY `id` DESC";
							$stmt = $conn->prepare($sql);
							$stmt->bindValue(':account_id', $account_id);
				            $stmt->execute();
				            return $stmt->fetchAll(PDO::FETCH_ASSOC);
						}

						$rows = readData($accountIDD, $conn);						

						}
						catch(PDOException $e)
					    {
					    echo "Connection failed: " . $e->getMessage();
					    }
								
					?>
				<div class="col-12">
					<div class="table-responsive">
						<table class="table table-bordered z-depth-1">
							<thead>
							      <tr>
							        <th colspan="5" class="txt-recent-transaction th p-3">Recent Transaction should be displayed here.</th>
							      </tr>
							</thead>
						    <thead>
								<tr>
									<th>Username</th>
									<th>Name</th>
									<th>Seat no.</th>
									<th>Fare</th>
									<th>Date Occupied</th>
								</tr>
						    </thead>

						    <?php 
						    	foreach ($rows as $row) 
								{		
									$username 		= $row['username'];
									$firstname 		= $row['firstname'];
								 	$lastname 		= $row['lastname'];
								 	$seat_no 		= $row['seat_no'];
									$fare 			= $row['fare'];
									$date 			= $row['date'];

									$explodedDate = explode('/', $date)
						    ?>
						    <tbody>
								<tr class="color-hover">
									<td><?=$username;?></td>
									<td><?=$firstname.' '.$lastname;?></td>
									<td><?=$seat_no;?></td>
									<td><?='₱ '.$fare;?></td>
									<td><?=$explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4];?></td>
								</tr>
						    </tbody>
						    <?php 
						    	}
						    ?>
					</table>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br>
	</section>

<?php 

//Footer Init
Footer::Create();

?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.msg-close').click(function() {
			$('.txt-top').hide();
		});
	});

	function goBack() {
	    window.history.back();
	}
</script>

<?php

else: 
	require_once 'login.php';
endif; 

?>





