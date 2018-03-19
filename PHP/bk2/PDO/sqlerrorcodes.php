<?php

/*
not for implementation
*/

 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

 $query = "INSERT INTO product(id, sku, title) VALUES(NULL, 'SS873221', 'Surly Soap') ";
 $dbh->exec($query);
 print_r($dbh->errorCode()); //42S02 - corresponds to mysql's nonexistent table message.

?>