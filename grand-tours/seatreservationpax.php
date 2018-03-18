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
			'active|seatreservation.php|Occupied/Unoccupied Seat',
			'inactive|seatreservationadd.php|Add New Van',
			'inactive|seatreservationrecords.php|VANS RECORDS'
		)
	);
?>

	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="seat-reservation z-depth-1">
						<div class="seat-reservation-breadcrumbs"><a href="#!" onclick="goBack()"><b><i class="fa fa-long-arrow-left"></i> </b> Back </a> | <a href="seatreservationpax.php?id=<?=$seat_reservation_id;?>"><i class="fa fa-refresh"></i> Refresh</a></div>								
					</div>
					<?php  
						foreach ($rowsSeatReservationInfo as $row) {
							$seat_reservation_id = $row['Id'];
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
					<div class="table-responsive">
						<table class="table table-bordered z-depth-1">
						    <thead>
						      <tr>
						      	<th colspan="7" class="seat-reservation th p-1">
						      		<a href="#" class="float-right" style="margin-left:5px;" onClick="window.open('receipt.php?id=<?=$seat_reservation_id;?>','Receipt','resizable,height=660,width=770'); return false;"><i class="fa fa-file-text fa-3" title="Print Receipt"></i></a>
									<a href="seatreservationconfirm.php?c=save&id=<?=$seat_reservation_id;?>" class="btn-seat-reservation btn-default btn-sm float-right"><i class="fa fa-check">&nbsp; </i> Save &nbsp;</a>
						     	</th>
						      </tr>
						      <tr>																	
						        	<th colspan="3" class="th p-3">
						        		<div class="seat-reservation-info-pax"><strong><?= strtoupper($vehicle); ?></strong></div>
						        		<div class="seat-reservation-info-pax">Destination: <?= strtoupper($explodedDestination[0]); ?> 
						        		<i class="fa fa-arrow-right"></i> <?= strtoupper($explodedDestination[1]); ?></div>	
						        		<div class="seat-reservation-info-pax">Schedule: <strong><?= $explodedSched[0].'/'.$explodedSched[1].'/'.$explodedSched[2].' - '.$explodedSched[3].' '.$explodedSched[4]; ?></strong></div>
						        	</th>	
						        	<th colspan="4" class="th p-3">
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
									<th>Seat State</th>
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

										($username=='empty') ? $username = '' : null;	
										($firstname=='empty') ? $firstname = '' : null;
										($lastname=='empty') ? $lastname = '' : null;
										($destination=='empty') ? $destination = '' : null;
										($date=='empty') ? $date = '' : null;

										($account_id==0) 
										?
											$btnChange = '<a href="#!" class="btn-default btn-sm" style="color:#ffffff;">
										    		<i class="fa fa-user" style="font-size:18px;"></i>&nbsp; Available</a>
												  </a>'
										: 												
											$btnChange = '<a href="#!" id="remove-'.$id.'" class="btn-danger btn-sm" data-toggle="modal" data-target="#'.$id.'" style="color:#ffffff;">
									    			<i class="fa fa-close" style="font-size:18px;"></i>&nbsp; Remove</a>
											 	  </a>';
								?>	
									<tr class="color-hover">
										<td class="text-center"><strong><?= $seat_no; ?></strong></td>
										<td><?= '₱ '.$fare; ?></td>
										<td class="uname-<?=$id;?>"><?= $username; ?></td>
										<td class="name-<?=$id;?>"><strong><?= ucwords(strtolower($firstname.' '.$lastname)); ?></strong></td>
										<td class="destin-<?=$id;?>"><?=ucwords(strtolower($destination));?></td>
										<td class="date date-<?=$id;?>"><i><?= $date; ?></i></td>
										<td>
											<?= $btnChange; ?>
										</td>
									</tr>							
									<!-- Modal -->
									<div class="modal fade" id="<?=$id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									    <div class="modal-dialog" role="document">
									        <div class="modal-content">
									            <div class="modal-header">
									                <h5 class="modal-title" id="exampleModalLabel"><strong>Remove Seat Reservation</strong></h5>
									                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									                    <span aria-hidden="true">&times;</span>
									                </button>
									            </div>
									            <div class="modal-body">
									                <div class="m-confirm-txt">Do you want to remove this person?</div>
									                <div class="m-review-txt">
									                	<div class="m-display-txt"><strong>Name: <?= ucwords(strtolower($firstname.' '.$lastname)); ?></strong></div>
									                </div>
									            </div>
									            <div class="modal-footer">
									            	<!--<button type="button" name="submit" class="btn btn-default btn-md" id="accountReg" data-dismiss="modal">Save Changes</button>-->
													<a href="#!" class="btn btn-danger btn-sm btn-remove" id="<?=$id;?>" data-dismiss="modal" name="">
														<i class="fa fa-close"></i> &nbsp; Remove
													</a>
									                <button type="button" class="btn btn-blue-grey btn-sm" data-dismiss="modal">Close</button>
									            </div>
									        </div>
									    </div>
									</div>
								<?php 
									}			
								?>								
						    </tbody>
						    <tfoot>
						    	<tr>				
									<td colspan="7" class="seat-reservation pt-4 pb-1 pr-1">
										<a href="seatreservationconfirm.php?c=save&id=<?=$seat_reservation_id;?>" class="btn-seat-reservation btn-default btn-sm float-right"><i class="fa fa-check">&nbsp; </i> Save &nbsp;</a>
									</td>
								</tr>
						    </tfoot>
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
		removePerson();
	});

	function removePerson()
	{
		$('.btn-remove').click(function(e) 
		{
			var id_remove = $(this).attr("id");
			//remove button
			$('#remove-'+id_remove).removeClass('btn-danger').removeAttr('data-toggle').removeAttr('data-target').addClass('btn-default').html('<i class="fa fa-user" style="font-size:18px;"></i>&nbsp; Available');
			//td uname
			$('.uname-'+id_remove).text('');
			//td name
			$('.name-'+id_remove).text('');
			//td destination
			$('.destin-'+id_remove).text('');
			//td date
			$('.date-'+id_remove).text('');

		     $.ajax({
		      url: "seatreservationpassengersremovepersonajax.php", //This is the page where you will handle your SQL insert
		      type: "POST",
		      data: "id=" + id_remove,
		      success: function(){
		          console.log("AJAX request was successfull");
		      },
		      error:function(){
		          console.log("AJAX request was a failure");
		      }   
		    });
		     e.preventDefault();
		});
	}

	function goBack() {
	    window.history.back();
	}
</script>

<?php
else: 
	require_once 'alogin.php';
endif; 

?>






