<?php

 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

$query = "INSERT INTO products SET sku = :sku, name = :name";
$stmt = $dbh->prepare($query);

?>