<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }


// Execute the query
 $sql = "SELECT * FROM `employees` ORDER BY `id` ASC";
 $result = dbh->prepare($sql);

 // Fetch the first row first column
 $user1 = $result->fetchColumn(9);
 // Fetch the second row second column
 $user2 = $result->fetchColumn(7);

 // Output the data.
 echo 'Data of User1: '.ucwords($user1).' <br>';
 echo 'Data of User2 '.ucwords($user2).' <br>';

?>
