<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\lib\datetime\SimpleDate;

$simpleDate = SimpleDate::Create();
$date = $simpleDate->getFormat('m/d/Y/h:i/A');
$explodedDate = explode('/', $date);
$schedDate = $explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2];

if($auth) :

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
			'active|seatreservationadd.php|Add New Van',
			'inactive|seatreservationrecords.php|Vans Records'
		)
	);

?>
	<head>
		<link rel="stylesheet" href="css/jquery-ui.css">
	</head>
	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="col-12 top-response z-depth-1">aa</div>
					<div class="table-responsive">
						<table class="table table-bordered z-depth-1">
						    <thead>
						      <tr>
						        <th colspan="2" class="th p-4">Add Seat Reservation</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
									<td class="data-txt txt-b"></td>
									<td class="display-data-txt txt-b">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#exampleModal" name="save" id="save">
											Save
										</button>
									</td>
							   </tr>
						      <tr>  
						        <td class="data-txt txt-a">Plate No.</td>
						        <td class="display-data-txt txt-a">
						        	<select class="form-control" name="vehicle" id="vehicle">
						        		<option value="empty"> - Select --</option>
										<option value="HVU 111">HVU 111</option>							        	  
										<option value="HVU 162">HVU 162</option>
										<option value="HVS 701">HVS 701</option>
										<option value="ABF 2813">ABF 2813</option>
										<option value="AYY 7266">AYY 7266</option>
										<option value="HVT 352">HVT 352</option>
										<option value="HVT 354">HVT 354</option>
										<option value="HVU 575">HVU 575</option>
										<option value="HVS 828">HVS 828</option>
										<option value="HVU 139">HVU 139</option>
									</select>	
						        </td>
						      </tr>
						      <tr>  
						        <td class="data-txt txt-a">Destination:</td>
						        <td class="display-data-txt txt-a">
						        	<select class="form-control" name="destination" id="destination">
						        		<option value="empty|empty"> - Select --</option>
										<option value="catbalogan|tacloban">Catbalogan -> Tacloban</option>							        	  
										<option value="catbalogan|calbayog">Catbalogan -> Calbayog</option>
									</select>	
						        </td>
						      </tr>
						      <tr>
								 <td class="data-txt txt-b">Schedule:</td>
								 <td class="display-data-txt txt-b">
									<div>
										<div class="row">
											<div class="col-12 col-sm-4 mr-0 pr-0">
												<input type="text" name="schedDate" value="<?=$schedDate;?>" id="schedDate" class="form-control validate" placeholder="Click to add date...">
											</div>
											<div class="col-12 col-sm-4 col-md-2 mr-0 pr-0">
												<select class="form-control" name="schedTime" id="schedTime">
									        		<!--<option value="empty"> - Select --</option>-->
													<option value="/01:00/">01:00</option>							        	  
													<option value="/01:30/">01:30</option>
													<option value="/02:00/">02:00</option>
													<option value="/02:30/">02:30</option>
													<option value="/03:00/">03:00</option>
													<option value="/03:30/">03:30</option>
													<option value="/04:00/">04:00</option>
													<option value="/04:30/">04:30</option>
													<option value="/05:00/">05:00</option>
													<option value="/05:30/">05:30</option>
													<option value="/06:00/">06:00</option>
													<option value="/06:30/">06:30</option>
													<option value="/07:00/">07:00</option>
													<option value="/07:30/">07:30</option>
													<option value="/08:00/">08:00</option>
													<option value="/08:30/">08:30</option>
													<option value="/09:00/">09:00</option>
													<option value="/09:30/">09:30</option>
													<option value="/10:00/">10:00</option>
													<option value="/10:30/">10:30</option>
													<option value="/11:00/">11:00</option>
													<option value="/11:30/">11:30</option>
													<option value="/12:00/">12:00</option>
													<option value="/12:30/">12:30</option>
												</select>
											</div>
											<div class="col-12 col-sm-4 col-md-2">
												<select class="form-control" name="schedAmPm" id="schedAmPm">
													<!--<option value="empty"> - Select --</option>-->
													<option value="AM">AM</option>							        	  
													<option value="PM">PM</option>
												</select>
											</div>
										</div>
									</div>
								</td>
						      </tr>
						      <tr>  
						        <td class="data-txt txt-b">Fare:</td>
						        <td class="display-data-txt txt-b">
						        	<select class="form-control" name="fare" id="fare">
						        		<option value="0"> - Select --</option>
										<option value="100">₱ 100.00</option>
										<option value="130">₱ 130.00</option>
									</select>	
						        </td>
						      </tr>						      
						     <tr>  
						        <td class="data-txt txt-b">Driver Name:</td>
						        <td class="display-data-txt txt-b">
						        	<select class="form-control" name="driver" id="driver">
						        		<option value="empty"> - Select --</option>
										<option value="Abapo , Christ Joseph">Abapo , Christ Joseph</option>							        	  
										<option value="Abordo , Lucio Jr.">Abordo , Lucio Jr.</option>
										<option value="Abrilla , Micheal">Abrilla , Micheal</option>
										<option value="Adarayan , Vicent">Adarayan , Vicent</option>
										<option value="Babon , Allan">Babon , Allan</option>
										<option value="Cabael , Vicente">Cabael , Vicente</option>
										<option value="Chavez , Efren">Chavez , Efren</option>
										<option value="Darondon , Eroll">Darondon , Eroll</option>
										<option value="Ende , Vincent">Ende , Vincent</option>
										<option value="Estrera , Edgardo Jr.">Estrera , Edgardo Jr.</option>
									</select>	
						        </td>
						      </tr>
						      <tr>
						        <td class="data-txt txt-b">Current Date & Time:</td>
						        <td class="display-data-txt txt-b">
						        	<div class="datetimeajaxrefresh"></div>
						        	<div class="seatreservationuniqidajaxrefresh"></div>
						        </td>						      
						      </tr>
						      <tr>
						        <td class="data-txt txt-a">Available Passengers:</td>
						        <td class="display-data-txt txt-a"><b>13</b></td>
						        <input type="hidden" name="hpassengers" id="hpassengers" value="0">
						      </tr>
						      <tr>
									<td class="data-txt txt-b"></td>
									<td class="display-data-txt txt-b">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#exampleModal" name="save" id="save">
											Save
										</button>
									</td>
							    </tr>
						    </tbody>
						</table>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						    <div class="modal-dialog" role="document">
						        <div class="modal-content">
						            <div class="modal-header">
						                <h5 class="modal-title" id="exampleModalLabel"><strong>Add Seat Reservation</strong></h5>
						                <button type="button" class="close" id="x-close" data-dismiss="modal" aria-label="Close">
						                    <span aria-hidden="true">&times;</span>
						                </button>
						            </div>
						            <div class="modal-body">
						                <div class="m-confirm-txt">Do you want to add this seat reservation?</div>
						               	<div class="m-response"></div>
						            </div>
						            <div class="modal-footer">
						            	<!--<button type="button" name="submit" class="btn btn-default btn-md" id="accountReg" data-dismiss="modal">Save Changes</button>-->
										<button type="button" class="btn btn-default btn-md" id="seatReservationAdd">Save Changes</button>
						                <button type="button" class="btn btn-blue-grey btn-md" id="close" data-dismiss="modal">Close</button>
						            </div>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php 

//Footer Init
Footer::Create();

?>

<script type="text/javascript">
	$(document).ready(function() 
	{
		//reset adding a seat reservation
		newSeatReservation();
		//ajax refresh
		dateTimeAjaxRefresh();
		seatReservationUniqIdAjaxRefresh();
		//ajax add data
		addSeatReservation();
		addSeatReservationPassengers();
	});

	function newSeatReservation() 
	{
		$('#vehicle, #destination, #schedDate, #schedTime, #schedAmPm, #driver, #fare').click(function() {
			$('.m-response').html('');
			$('#seatReservationAdd').removeAttr('disabled').show();
		});
	}

	function dateTimeAjaxRefresh() 
	{
		return (function worker() {
			 $.ajax({
			    url: 'datetimeajaxrefresh.php', 
			    success: function(data) {
			      $('.datetimeajaxrefresh').html(data);
			      //console.log("an ajax page refresh is currently running...");
			    },
			    complete: function() {
			      // Schedule the next request when the current one's complete
			      setTimeout(worker, 500);
			    }
			  });
		})();
	}

	function seatReservationUniqIdAjaxRefresh() 
	{
		return (function worker() {
			 $.ajax({
			    url: 'seatreservationuniqidajaxrefresh.php', 
			    success: function(data) {
			      $('.seatreservationuniqidajaxrefresh').html(data);
			      //console.log("an ajax page refresh is currently running...");
			    },
			    complete: function() {
			      // Schedule the next request when the current one's complete
			      setTimeout(worker, 500);
			    }
			  });
		})();
	}

	function addSeatReservation() 
	{
		$('#seatReservationAdd').click(function()
		{
			$(this).attr('disabled', 'disabled').hide();
			//
			return (function() {
			   	$.ajax({
				url: "seatreservationaddajax.php", 
				type: "POST",
				data: $('#vehicle, #destination, #schedDate, #schedTime, #schedAmPm, #fare, #driver, #hdate, #hpassengers').serialize(), 
					success: function() {
							//$('#vehicle, #driver').val('');
							console.log("AJAX request was successfull - action=INSERT");						                    
					},
					complete: function(data) {
							$('.m-response').html('A new seat reservation has been added!');		
							console.log("AJAX request was completed - action=INSERT");
					},
					error:function(){
							console.log("AJAX request was a failure - action=INSERT");
					}    
			    });
			})();
		});				
	}

	function addSeatReservationPassengers() 
	{
		$('#seatReservationAdd').click(function()
		{
			//
			return (function() {
			   	$.ajax({
			      url: "seatreservationpassengersaddajax.php", 
			      type: "POST",
					data: $('#hseatreservationid, #fare').serialize(), 
					  success: function() {
							console.log("AJAX request was successfull - action=INSERT");						                    
					},
					complete: function(data) {		
							console.log("AJAX request was completed - action=INSERT");
					},
					error:function(){
							console.log("AJAX request was a failure - action=INSERT");
					}    
			    });
			})();
		});				
	}
	
</script>
<script src="js/jquery-ui.js"></script>
<script>
  $(function() {
	$('#schedDate').datepicker({
	  //prevText: "Earlier"
	});
  });
</script>
<?php

else: 
	require_once 'alogin.php';
endif; 

?>






