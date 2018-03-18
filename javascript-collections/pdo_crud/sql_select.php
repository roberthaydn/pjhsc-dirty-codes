<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }


// Execute the query
 $stmt = $dbh->query('SELECT * FROM `employees` ORDER BY `id` ASC');

 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 	 $id = $row['id'];
	 $username = $row['username'];
	 $firstname = $row['firstname'];
	 $lastname = $row['lastname'];
	 $gender = $row['gender'];

	echo $id.' '.$username.' '.$firstname.' '.$gender.'<br>';
 }

?>

