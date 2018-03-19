<?php

 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

 $query = "UPDATE product SET `title`='toothpastessss', `sku`='sdfsdhfjksdhfk' WHERE `id`='1'";
 //$query = "DELETE FROM product WHERE `id`='0'";
 $affected = $dbh->exec($query); 
 echo 'Affected rows: '.$affected;

?>

