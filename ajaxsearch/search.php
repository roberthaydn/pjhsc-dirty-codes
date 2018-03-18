<?php
//selecting data
try {
	$dbh = new PDO('mysql:host=localhost;dbname=db_grandtours', 'root', '');
} catch (PDOException $exception) {
	printf("Connection error: %s", $exception->getMessage());
}


/*
* UPDATE SEARCH
*/
//query
$sql = "UPDATE `tbl_seat_reservation_search` SET 
					 `search`=:search
					  WHERE `id`=:id";
//prepare statement
$stmt = $dbh->prepare($sql);

if(isset($_POST['search'])) {
	//info nga karuyag ig insert
	$search = $_POST['search'];
	$Id = 1;

	($search=='') ? $search='empty' : null;

	//retrieve info by its named parameters
	$stmt->bindParam(':search', $search);
	$stmt->bindParam(':id', $Id); 
	$stmt->execute();

	echo '<pre>';
	print_r($stmt->errorInfo());
	echo '</pre>';
}

/*
* UPDATE FILTER
*/
$sql = "UPDATE `tbl_seat_reservation_search` SET 
					 `filter`=:filter
					  WHERE `id`=:id";
//prepare statement
$stmt = $dbh->prepare($sql);

if(isset($_POST['filter'])) {
	//info nga karuyag ig insert
	$filter = $_POST['filter'];
	$Id = 1;
	
	//retrieve info by its named parameters
	$stmt->bindParam(':filter', $filter);
	$stmt->bindParam(':id', $Id); 
	$stmt->execute();

	echo '<pre>';
	print_r($stmt->errorInfo());
	echo '</pre>';
}

?>


