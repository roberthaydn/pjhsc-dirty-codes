<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }


// Execute the query
 $stmt = $dbh->query('SELECT sku, title FROM product ORDER BY title');

// Retrieve all of the rows
 $rows = $stmt->fetchAll();
 
// Output the rows
foreach ($rows as $row) {
	$sku = $row[0];
	$title = $row[1];
	printf("Product: %s (%s) <br />", $title, $sku);
}

?>

