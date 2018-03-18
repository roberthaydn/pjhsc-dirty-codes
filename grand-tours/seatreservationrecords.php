<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\reservation\SeatReservationInfoController;
use app\controller\reservation\SeatReservationSearchRecordsController;

if($auth) :

$seatReservationInfo = SeatReservationInfoController::Create();
$rows = $seatReservationInfo->data();

$seatReservationSearchRecords = SeatReservationSearchRecordsController::Create();
$seatReservationSearchRecords->searchDefault();

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
				<div class="col-12 seat-reservation z-depth-1">
					<!-- Search form -->
					<div class="form-inline md-form form-sm mb-0 pb-0">
					    <i class="fa fa-search" aria-hidden="true"></i>
					    <input class="form-control w-25 ml-3" type="text" name="search" id="search" placeholder="Search vehicle's name..." aria-label="Search">
						<select class="form-control" name="filter" id="filter">
							<option value="vehicle"> <b>Select Filter</b> </option>
							<option value="vehicle">Vehicle's name</option>		
							<option value="destination">Destination</option>					        	  
							<option value="schedule">Schedule</option>
							<option value="fare">Fare</option>
							<option value="driver">Driver</option>
							<option value="date">Date</option>
							<option value="passengers">Passengers</option>
							<option value="income">Income</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 seat-reservation z-depth-1 pt-3 search-wrapper">
					<div class="seatreservationsearchajaxrefresh">
					</div>
				</div>
			</div>
		</div>			

		<div class="container">
			<div class="row">
				<div class="col-12 seat-reservation z-depth-1 pt-3">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
							      <tr>
							        <th colspan="9" class="th">VANS RECORDS PER TRIP
									</th>
							      </tr>
							</thead>
						    <thead>
								<tr>
									<th>Vehicle's name</th>
									<th>Destination</th>
									<th>Schedule</th>
									<th>Fare</th>
									<th>Driver</th>
									<th>Date</th>
									<th>Passengers</th>
									<th>Income</th>
									<th>&nbsp;</th>
								</tr>
						    </thead>
						    <tbody>
							      	<?php 

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
										$income			= $row['income'];
										$state			= $row['state'];

										$explodedDestination = explode("|", $destination);
										$explodedSched = explode('/', $schedule);
										$explodedDate = explode('/', $date);

										if($state==2)
										{										
									?>
										<tr class="color-hover">
											<td class="td-txt p-2"></i><a href="seatreservationpassengersrecord.php?id=<?=$Id;?>"><?=strtoupper($vehicle);?></a></td>
											<td class="td-txt p-2"><?=strtoupper($explodedDestination[0]);?> &nbsp;<i class="fa fa-arrow-right"></i>&nbsp;<?=strtoupper($explodedDestination[1]);?></td>
											<td class="td-txt p-2"><?= $explodedSched[0].'/'.$explodedSched[1].'/'.$explodedSched[2].' - '.$explodedSched[3].' '.$explodedSched[4]; ?></td>
											<td class="td-txt p-2"><?='₱ '.$fare;?></td>
											<td class="td-txt p-2"><?=ucwords(strtolower($driver));?></td>
											<td class="td-txt p-2"><?=$explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4];?></td>
											<td class="td-txt p-2"><?=$passengers;?></td>
											<td class="td-txt p-2"><?='₱ '.$income;?></td>
											<td class="td-txt p-2"><a href="#" onClick="window.open('receipt.php?id=<?=$Id;?>','Receipt','resizable,height=660,width=770'); return false;"><i class="fa fa-file-text fa-2" title="Print Receipt"></i></a></td>
										</tr>
								<?php 
										}
									}			
								?>
						    </tbody>
						</table>
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
		$('.search-wrapper').hide();
		search();
		searchView();
		changeFilter();
		//searchClick();
	});

	function search() 
	{
		$('#search').keyup(function()
		{
			var __showSearchWrapper = (function () {
				return function () {
					$('.search-wrapper').show();
				}
			})();

			return (function() {
			   	$.ajax({
			      url: "seatreservationsearchajaxupdate.php", 
			      type: "POST",
					data: $('#search').serialize(), 
					  success: function() {
						console.log("AJAX request was successfull - action=UPDATE");		
						//search-wrapper
						__showSearchWrapper();							
					},
					complete: function(data) {		
						console.log("AJAX request was completed - action=UPDATE");
					},
					error:function(){
						console.log("AJAX request was a failure - action=UPDATE");
					}    
			    });
			})();
		});				
	}

	function changeFilter() 
	{	
		var __hideSearchWrapper = (function () {
			return function () {
				$('.search-wrapper').hide();
			}
		})();

		var __searchValue = (function () {
			return function () {
				$('#search').val('');
			}
		})(); 

		var __placeholder = (function (placeholder) {
			return function (placeholder) {
				$('#search').attr('placeholder', 'Search ' + placeholder + '...');
			}
		})();

		var __filter = (function (filter) {
			return function (filter) {
				var filterValue = ['vehicle', 'destination', 'schedule', 'fare', 'driver', 'date', 'passengers', 'income'];
				for(i = 0; i <= 7; i ++) {
					if(filter==filterValue[i]) {
						__placeholder(filterValue[i]);
					}
				}
			}
		})();

		var __searchFocus = (function() {
			return function() {
				$( "#search" ).focus();
			}
		})();

		$('#filter').change(function()
		{
			var filter = $(this).val();

			return (function() {
			   	$.ajax({
			      url: "seatreservationsearchajaxupdate.php", 
			      type: "POST",
					data: $('#filter').serialize(), 
					  success: function() {
						console.log('success ' + filter);	
						__filter(filter);
						__searchValue();
						__searchFocus();
						__hideSearchWrapper();
					},
					complete: function(data) {		
						console.log('complete ' + filter);
					},
					error:function(){
						console.log('error ' + filter);
					}    
			    });
			})();
		});
	}

	function searchView() 
	{
		return (function worker() {
			 $.ajax({
			    url: 'seatreservationsearchajaxrefresh.php',
			    success: function(data) {
			      $('.seatreservationsearchajaxrefresh').html(data);
			    },
			    complete: function() {
			      // Schedule the next request when the current one's complete
			      setTimeout(worker, 3000);
			    }
			  });
		})();
	}

	function searchClick() {
		var __hideSearchWrapper = (function () {
			return function () {
				$('.search-wrapper').hide();
			}
		})();

		$('#search').click(function() {
			__hideSearchWrapper();
		});
	}
</script>

<?php
else: 
	require_once 'alogin.php';
endif; 

?>






