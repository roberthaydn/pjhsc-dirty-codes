<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }


// Execute the query
 $result = $dbh->query('SELECT sku, title FROM product ORDER BY title');
 // Fetch the first row first column
 $sku = $result->fetchColumn(0);
 // Fetch the second row second column
 $title = $result->fetchColumn(1);
 // Output the data.
 echo "Product: $title ($sku)";

?>

