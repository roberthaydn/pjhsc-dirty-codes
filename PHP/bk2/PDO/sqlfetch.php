<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }


// Execute the query
 $stmt = $dbh->query('SELECT sku, title FROM product ORDER BY title');

 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 $sku = $row['sku'];
	 $title = $row['title'];
	 printf("Product: %s (%s) <br />", $title, $sku);
 }

?>

