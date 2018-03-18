<?php 

require_once 'auth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';
require_once './frontend-ui/pickup.php';

use app\lib\encryption\Encryption;
use app\controller\reservation\SeatReservationInfoController;
use app\controller\reservation\SeatReservationPassengersInfoController;

if($auth) :

//pick up
$pickUp = Pickup::Create();

//seat reservation id
@$id = $_GET['b80bb7740288fda1f201890375a60c8f'];		
$decrpytId = Encryption::Simple_crypt($id, 'd');

//seat reservation data
$seatReservationInfo = SeatReservationInfoController::Create();
$rowsSeatReservationInfo = $seatReservationInfo->dataForSeatPassengers($decrpytId);

//seat reservation passengers - account-id
$seatReservationPassengersInfo = SeatReservationPassengersInfoController::Create();

//seat reservation destination
@$destination = $_GET['984d866b4696362085af4ffcb82377d2'];
$decryptDestination = Encryption::Simple_crypt($destination, 'd');
$explodedDestination = explode("|", $decryptDestination);

//check if checkbox is available
$chk1 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '1');
$chk2 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '2');
$chk3 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '3');
$chk4 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '4');
$chk5 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '5');
$chk6 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '6');
$chk7 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '7');
$chk8 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '8');
$chk9 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '9');
$chk10 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '10');
$chk11 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '11');
$chk12 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '12');
$chk13 = $seatReservationPassengersInfo->getDataPassengersDisableCheckbox($decrpytId, '13');

if ($chk1!=0) {
	$disabled1='disabled';
	$color1='color:red;';
}
if ($chk2!=0) {
	$disabled2='disabled';
	$color2='color:red;';
}
if ($chk3!=0) {
	$disabled3='disabled';
	$color3='color:red;';
}
if ($chk4!=0) {
	$disabled4='disabled';
	$color4='color:red;';
}
if ($chk5!=0) {
	$disabled5='disabled';
	$color5='color:red;';
}
if ($chk6!=0) {
	$disabled6='disabled';
	$color6='color:red;';
}
if ($chk7!=0) {
	$disabled7='disabled';
	$color7='color:red;';
}
if ($chk8!=0) {
	$disabled8='disabled';
	$color8='color:red;';
}
if ($chk9!=0) {
	$disabled9='disabled';
	$color9='color:red;';
}
if ($chk10!=0) {
	$disabled10='disabled';
	$color10='color:red;';
}
if ($chk11!=0) {
	$disabled11='disabled';
	$color11='color:red;';
}
if ($chk12!=0) {
	$disabled12='disabled';
	$color12='color:red;';
}
if ($chk13!=0) {
	$disabled13='disabled';
	$color13='color:red;';
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
			'active|reservation.php|SEAT RESERVATION', 
			'inactive|account.php|MY ACCOUNT',
			'inactive|logout.php|LOG OUT'
		),

		//SECOND MENU
		array(
			'active|reservation.php|Available Vans'
		)
	);
?>
	<!-- quick css init -->
	<head>
		<!-- CDN LINK -->
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
	</head>
	<section class="panel-main">
		<form action="transaction.php" method="GET">	
			<input type="hidden" name="b80bb7740288fda1f201890375a60c8f" value="<?=$id;?>">
			<div class="container" style="margin-bottom:20px;">
				<div class="passengers z-depth-1">
					<div class="row">
						<?php 	
							foreach ($rowsSeatReservationInfo as $row) {
								$vehicle = $row['vehicle'];
								$fare = $row['fare'];
								$driver = $row['driver'];
								$date = $row['date'];
								$state = $row['state'];

								$explodedDate = explode('/', $date);

						?>
								<div class="col-12 col-sm-6">
									<div class="seat-reservation-info-parent">
										<div class="seat-reservation-info-child"><strong><?= strtoupper($vehicle); ?></strong></div>
										<div class="seat-reservation-info-child"><?= strtoupper($explodedDestination[0]).' <i class="fa fa-arrow-right fa-1"></i> '.strtoupper($explodedDestination[1]); ?></div>
										<div class="seat-reservation-info-child">Schedule: <?= 'Schedule'; ?></div>
									</div>
								</div>
								<div class="col-12 col-sm-6">	
									<div class="seat-reservation-info-parent">		
										<div class="seat-reservation-info-child">Fare: ₱ <?= $fare; ?></div>						
										<div class="seat-reservation-info-child">Driver: <?= ucwords(strtolower($driver)); ?></div>								
										<div class="seat-reservation-info-child">Date: <?= $explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4]; ?></div>
									</div>
								</div>

								<input type="hidden" name="hfare" value="<?=$fare;?>">
								<input type="hidden" name="hstate" value="<?=$state;?>">
						<?php
							}							
						?>	
					</div>
				</div>
			</div>		
			<div class="container">
				<div class="passengers z-depth-1">
					<div class="row">
						<div class="col-12">
							<h5 class="title">Please select your seat no.<br> <span>(You can select more than one seat no.)</span></h5>
						</div>
					</div>
					<div class="row">						
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat">
								 <label class="check-label"><i class="fa fa-user fa-2"></i> Driver</label>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-1">
								<?php 
								
								?>
							    <div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-1" value='xNRVZ' <?=@$disabled1;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color1;?>">Seat 1</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-2">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-2" value='DbvcH' <?=@$disabled2;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color2;?>">Seat 2</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat">
							 	<label class="check-label"><i class="fa fa-close"></i></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-3">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-3" value='3eQum' <?=@$disabled3;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color3;?>">Seat 3</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-4">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-4" value='FBMa3' <?=@$disabled4;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color4;?>">Seat 4</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-5">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-5" value='GQvLS' <?=@$disabled5;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color5;?>">Seat 5</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat">
								 <label class="check-label"><i class="fa fa-close"></i></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-6">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-6" value='O4U2x' <?=@$disabled6;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color6;?>">Seat 6</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-7">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-7" value='54R1O' <?=@$disabled7;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color7;?>">Seat 7</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-8">					 
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-8" value='qWfjc' <?=@$disabled8;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color8;?>">Seat 8</span></label>
							        </div>
							    </div>					
							</div>	
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-9">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-9" value='g31Pr' <?=@$disabled9;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color9;?>">Seat 9</span></label>
							        </div>
							    </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-10">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-10" value='uay5K' <?=@$disabled10;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color10;?>">Seat 10</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-11">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-11" value='xSlP2' <?=@$disabled11;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color11;?>">Seat 11</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-12">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-12" value='OY0nC' <?=@$disabled12;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color12;?>">Seat 12</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-md-3">
							<div class="seat seat-13">
								<div class="pretty p-default p-thick p-pulse">
							        <input type="checkbox" name="c[]" class="check-13" value='7DDtA' <?=@$disabled13;?>/>
							        <div class="state p-success-o">
							            <label class="check-label"><span style="<?=$color13;?>">Seat 13</span></label>
							        </div>
							    </div>
							</div>
						</div>
					</div>		
				</div>		
			</div>
			
			<div class="container" style="margin-top:20px;">
				<div class="passengers z-depth-1">
					<div class="row">
						<div class="col-12 col-sm-6 col-md-6">
							<div class="seat seat-1">
							    <div class="pretty p-default p-thick p-pulse">
							        <input type="radio" name="destination" id="radioStation" class="stationToStation" value="station to station" checked/>
							        <div class="state p-success-o">
							            <label class="check-label">Station to Station <span class="station-to-station">(<?= ucwords(strtolower($explodedDestination[0].' To '.$explodedDestination[1]));?>)</span></label>
							        </div>
							    </div>
							</div>
						</div>
						<!-- pick up-->
							<?php 
								if($decryptDestination=='catbalogan|tacloban') 
								{
									$pickUp->catbaloganToTacloban();
								} 
								else if($decryptDestination=='catbalogan|calbayog')
								{
									$pickUp->catbaloganToCalbayog();		
								}
							?>
						<!-- pick up-->
					</div>
				</div>
			</div>

			<div class="container" style="margin-top:20px;">
				<div class="passengers z-depth-1">
					<div class="row">
						<div class="col-12">
							<div class="seat text-center">
								<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#exampleModal">RESERVE</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			    <div class="modal-dialog" role="document">
			        <div class="modal-content">
			            <div class="modal-header">
			                <h5 class="modal-title" id="exampleModalLabel"><strong>Seat Reservation</strong></h5>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                    <span aria-hidden="true">&times;</span>
			                </button>
			            </div>
			            <!--<div class="modal-body">
			                <div class="m-confirm-txt"><strong>Save changes</strong></div>
			                <div class="m-review-txt">
			                	<strong></strong>
								<div class="m-display-txt m-display-check-1"></div>
								<div class="m-display-txt m-display-check-2"></div>
			                </div>
			            </div>-->
			            <div class="modal-footer">
			            	<!--<button type="button" name="submit" class="btn btn-default btn-md" id="accountReg" data-dismiss="modal">Save Changes</button>-->
							<input type="submit" class="btn btn-default btn-md" value=" Confirm! ">
			                <button type="button" class="btn btn-blue-grey btn-md" data-dismiss="modal">No</button>
			            </div>
			        </div>
			    </div>
			</div>
			
			<!-- Serve as default value of a seat no. if the user doesn't choose a seat no.-->
			<!--<div class="col-6 col-sm-4 col-md-3" style="visibility:hidden;">
				<div class="seat seat-1">
				    <div class="pretty p-default p-thick p-pulse">
				       <input type="checkbox" name="c[]" class="check-0" value='Z3RqH' checked/>
				        <div class="state p-success-o">
				            <label class="check-label">Seat 0</label>
				        </div>
				    </div>
				</div>
			</div>-->
			<!-- -->
		</form>
		<br><br>
	</section>

<?php 

//Footer Init
Footer::Create();

?>

<script type="text/javascript">
	$(document).ready(function() {
		disableSpecificLocation();
		enableSpecificLocation();		
	});

	function disableSpecificLocation() {
		$('.stationToStation, .pick-up').click(function() {
			$('.specific-location').val('');
			$('.specific-location').attr('placeholder', 'Type your location here...');		
			$('.specific-location').attr('disabled', 'disabled');			
		}); 	
	}

	function enableSpecificLocation() {
		$('.radio-specific-location').click(function() {
  			$('.specific-location').removeAttr('disabled', 'disabled');
  			$('.specific-location').focus();
		});
	}

	/*function checkBtn() {
		$('.check-1').click(function () {
		    var y = $(this).find(':checkbox');
		    if ($(':checked').length) {
		      y.prop('checked', false);
		      $('.m-display-check-1').html('Seat no. 1');
		    } else {
		      y.prop('checked', true);
		      $('.m-display-check-1').html('');
		    }
		});
	}*/
</script>

<?php

else: 
	require_once 'login.php';
endif; 

?>





