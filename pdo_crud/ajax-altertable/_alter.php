<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }
 
$dbh->exec("ALTER TABLE `employees` DROP id");
$dbh->exec("ALTER TABLE `employees` ADD id INT(11) NOT NULL AUTO_INCREMENT Primary key FIRST");


?>