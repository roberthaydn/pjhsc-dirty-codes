<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

 $sql = "DELETE FROM `employees` WHERE `absent`=:absent";
 $stmt = $dbh->prepare($sql);

 $absent = 33;

//retrieve info by its named parameters
 $stmt->bindParam(':absent', $absent);
 $stmt->execute();

 echo '<pre>';
 print_r($stmt->errorInfo());
 echo '</pre>';

?>



