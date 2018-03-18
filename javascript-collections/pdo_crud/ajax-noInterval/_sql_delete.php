<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }
 
 $data = $_POST['id'];
 $sql = "DELETE FROM `employees` WHERE `id`=:id";
 $stmt = $dbh->prepare($sql);

//retrieve info by its named parameters
 $stmt->bindParam(':id', $data);
 $stmt->execute();

 echo '<pre>';
 print_r($stmt->errorInfo());
 echo '</pre>';

?>