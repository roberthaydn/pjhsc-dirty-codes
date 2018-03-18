<?php 

require_once 'aauth.php';
require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';

use app\controller\reservation\SeatReservationInfoController;


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

<?php
//selecting data
try {
	$dbh = new PDO('mysql:host=localhost;dbname=db_grandtours', 'root', '');
} catch (PDOException $exception) {
	printf("Connection error: %s", $exception->getMessage());
}


/*
* UPDATE SEARCH - DEFAULT SEARCH
*/
//query
$sql = "UPDATE `tbl_seat_reservation_search` SET 
					 `search`=:search,
					 `filter`=:filter
					  WHERE `id`=:id";
//prepare statement
$stmt = $dbh->prepare($sql);
//info nga karuyag ig insert
$search = 'empty';
$filter = 'vehicle';
$Id = 1;

//retrieve info by its named parameters
$stmt->bindParam(':search', $search);
$stmt->bindParam(':filter', $filter);
$stmt->bindParam(':id', $Id); 
$stmt->execute();

/*
echo '<pre>';
print_r($stmt->errorInfo());
echo '</pre>';
*/

?>

	<section class="panel-main">
		<div class="container">
			<div class="row">
				<div class="col-12 seat-reservation z-depth-1">
					<!-- Search form -->
					<div class="form-inline md-form form-sm mb-0 pb-0">
					    <i class="fa fa-search" aria-hidden="true"></i>
					    <input class="form-control w-25 ml-3" type="text" name="search" id="search" placeholder="Search vehicle..." aria-label="Search">
						<select class="form-control" name="filter" id="filter">
							<option value="vehicle"> <b>Select Filter</b> </option>
							<option value="vehicle">Vehicle's name</option>							        	  
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
					<div class="searchajaxrefresh ">
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
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.search-wrapper').hide();
		search();
		searchajaxrefresh();
		changeFilter();
		//removeResponse();
	});

	function search() 
	{
		$('#search').keyup(function()
		{
			//
			return (function() {
			   	$.ajax({
			      url: "search.php", 
			      type: "POST",
					data: $('#search').serialize(), 
					  success: function() {
							console.log("AJAX request was successfull - action=UPDATE");		
							//search-wrapper
							$('.search-wrapper').show();	
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
				var filterValue = ['vehicle', 'schedule', 'fare', 'driver', 'date', 'passengers', 'income'];
				for(i = 0; i <= 6; i ++) {
					if(filter==filterValue[i]) {
						__placeholder(filterValue[i]);
					}
				}
			}
		})();

		$('#filter').change(function()
		{
			var filter = $(this).val();

			return (function() {
			   	$.ajax({
			      url: "search.php", 
			      type: "POST",
					data: $('#filter').serialize(), 
					  success: function() {
							console.log('success ' + filter);	
							__filter(filter);
							__searchValue();
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

	function searchajaxrefresh() 
	{
		return (function worker() {
			 $.ajax({
			    url: 'searchajaxrefresh.php',
			    success: function(data) {
			      $('.searchajaxrefresh').html(data);
			    },
			    complete: function() {
			      // Schedule the next request when the current one's complete
			      setTimeout(worker, 3000);
			    }
			  });
		})();
	}
</script>


