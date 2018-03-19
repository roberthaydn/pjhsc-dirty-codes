<?php

/*
not for implementation
*/

 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

 // Create and prepare the query
 $query = "INSERT INTO product SET sku = :sku, title = :title";
 $stmt = $dbh->prepare($query);

 // Execute the query
 $stmt->execute(array(':sku' => 'MN873213', ':title' => 'Minty Mouthwash'));
 
 // Execute again
 $stmt->execute(array(':sku' => 'AB223234', ':title' => 'Lovable Lipstick'));
 
 
?>