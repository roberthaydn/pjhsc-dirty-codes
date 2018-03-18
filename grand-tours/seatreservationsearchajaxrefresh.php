<?php

require_once 'autoload.php';

use app\controller\reservation\SeatReservationSearchRecordsController;

$seatReservationSearchRecords = SeatReservationSearchRecordsController::Create();

$keyword = $seatReservationSearchRecords->searchRetrieve('search');
$filter = $seatReservationSearchRecords->searchRetrieve('filter');
$search = $seatReservationSearchRecords->search($keyword, $filter);

?>

<!--
	
-->

<?php 

$total_income = 0;
	foreach ($search as $row) 
	{
		$income	= $row['income'];
		$total_income = $total_income + $income;
	}
?>
<table class="table table-bordered table-total-income">
	<tr class="">
		<td colspan="8" class="total-income">TOTAL INCOME: <?='₱ '.$total_income;?></td>
	</tr>
</table>

<table class="table table-bordered table-search">
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
		</tr>
    </thead>
   	<tbody>

		<?php
		
		foreach ($search as $row) 
		{
			$Id = $row['Id'];
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
				<td class="td-txt p-2"><a href="seatreservationpassengersrecord.php?id=<?=$Id;?>"><?=strtoupper($vehicle);?></a></td>
				<td class="td-txt p-2"><?=strtoupper($explodedDestination[0]);?> &nbsp;<i class="fa fa-arrow-right"></i>&nbsp;<?=strtoupper($explodedDestination[1]);?></td>
				<td class="td-txt p-2"><?= $explodedSched[0].'/'.$explodedSched[1].'/'.$explodedSched[2].' - '.$explodedSched[3].' '.$explodedSched[4]; ?></td>
				<td class="td-txt p-2"><?='₱ '.$fare;?></td>
				<td class="td-txt p-2"><?=ucwords(strtolower($driver));?></td>
				<td class="td-txt p-2"><?=$explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4];?></td>
				<td class="td-txt p-2"><?=$passengers;?></td>
				<td class="td-txt p-2"><?='₱ '.$income;?></td>
			</tr>
		<?php 
			}		
		}
		?>
	</tbody>
</table>



