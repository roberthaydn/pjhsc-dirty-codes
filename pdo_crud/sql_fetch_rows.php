<?php

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

/*
$keyword='ap';
$sql="SELECT * FROM `items` WHERE `name` LIKE :keyword;";
$q=$dbh->prepare($sql);
$q->bindValue(':keyword','%'.$keyword.'%');
$q->execute();
while ($r=$q->fetch(PDO::FETCH_ASSOC)) {
    echo"<pre>".print_r($r,true)."</pre>";
}
*/

 $id = 1;
// Create and prepare the query
 $query = "SELECT * FROM `employees` WHERE `id`=:id";
 $stmt = $dbh->prepare($query);
 $stmt->bindValue(':id', 1);
 $stmt->execute();

 // Bind according to column offset
 $stmt->bindColumn('firstname', $firstname);
 $stmt->bindColumn('lastname', $lastname);
 $stmt->bindColumn('id', $id);
 $stmt->fetch(PDO::FETCH_BOUND);

 if(!($id == NULL)) {
 //$stmt->bindColumn('firstname', $firstname);
 //$stmt->bindColumn('lastname', $lastname);
 // Fetch the row
 
 // Output the data
 echo 'Id: '.$id.' <br>Firstname: '.$firstname.' <br>Lastname: '.$lastname;
 echo 'wew';
 } else {
 	echo 'Result not found!';
 }
 