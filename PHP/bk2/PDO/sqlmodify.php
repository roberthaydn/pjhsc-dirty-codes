<?php

 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

 $query = "INSERT INTO tablenotexist(id, sku, title) VALUES(1, 'SS873221', 'Surly Soap') ";
 $dbh->exec($query);
 print_r($dbh->errorInfo());


?>