<?php 
//selecting data
try {
	$dbh = new PDO('mysql:host=localhost;dbname=db_grandtours', 'root', '');
} catch (PDOException $exception) {
	printf("Connection error: %s", $exception->getMessage());
}

$sql = "SELECT * FROM `tbl_seat_reservation_search` WHERE `id`=:id";
$Id = 1;
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':id', $Id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch();
$rowSearch = $row['search'];
$rowFilter = $row['filter'];

$keyword = $rowSearch;
$tbl = 'tbl_seat_reservation';
$filter = $rowFilter;

?>

<table class="table table-bordered">
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

		$sql="SELECT * FROM {$tbl} WHERE {$filter} LIKE :keyword";
		$search=$dbh->prepare($sql);
		$search->bindValue(':keyword','%'.$keyword.'%');
		$search->execute();

			if(!($search->rowCount() == null)) {

				while ($row = $search->fetch(PDO::FETCH_ASSOC)) {

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
						<td><a href="seatreservationpassengersrecord.php?id=<?=$Id;?>"><?=strtoupper($vehicle);?></a></td>
						<td><?=strtoupper($explodedDestination[0]);?> &nbsp;<i class="fa fa-arrow-right"></i>&nbsp;<?=strtoupper($explodedDestination[1]);?></td>
						<td><?= $explodedSched[0].'/'.$explodedSched[1].'/'.$explodedSched[2].' - '.$explodedSched[3].' '.$explodedSched[4]; ?></td>
						<td><?='₱ '.$fare;?></td>
						<td><?=ucwords(strtolower($driver));?></td>
						<td><?=$explodedDate[0].'/'.$explodedDate[1].'/'.$explodedDate[2].' - '.$explodedDate[3].' '.$explodedDate[4];?></td>
						<td><?=$passengers;?></td>
						<td><?='₱ '.$income;?></td>
					</tr>
<?php 
					}
				}													
			} else {
				echo '<tr><td colspan="8" class="seat-reservation">Results not found!</td></tr>';
			}
?>
	</tbody>
</table>

