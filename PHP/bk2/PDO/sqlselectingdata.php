<?php
//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

$query = 'SELECT sku, title FROM product ORDER BY title';
$result = $dbh->query($query);
// Report how many columns were returned
printf("There were %d product fields returned.", $result->columnCount());

?>