<?php
//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }
 
//query
 $sql = "INSERT INTO `employees` SET 
 					 `id`=:id,
 					 `username`=:username, 
 					 `firstname`=:firstname,
 					 `lastname`=:lastname,
 					 `password`=:password,
 					 `gender`=:gender,
 					 `age`=:age,
 					 `salary`=:salary,
 					 `absent`=:absent,
 					 `status`=:status";
//prepare statement
 $stmt = $dbh->prepare($sql);

//info nga karuyag ig insert
 $id = '';
 $username = 'asdasd';
 $firstname = 'joselito';
 $lastname = 'gelilang';
 $password = 'password';
 $gender = 'male';
 $age = '11';
 $salary = '330000';
 $absent = '0';
 $status = 'single';

//retrieve info by its named parameters
 $stmt->bindParam(':id', $id);
 $stmt->bindParam(':username', $username); 
 $stmt->bindParam(':firstname', $firstname);
 $stmt->bindParam(':lastname', $lastname); 
 $stmt->bindParam(':password', $password);
 $stmt->bindParam(':gender', $gender);
 $stmt->bindParam(':age', $age); 
 $stmt->bindParam(':salary', $salary); 
 $stmt->bindParam(':absent', $absent);
 $stmt->bindParam(':status', $status);
 $stmt->execute();

 echo '<pre>';
 print_r($stmt->errorInfo());
 echo '</pre>';


/*
//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_grandtours', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }
 
//query
 $sql = "INSERT INTO `tbl_seat_reservation` SET 
 					 `vehicle`=:vehicle,
 					 `destination`=:destination,
 					 `driver`=:driver,
 					 `date`=:hdate,
 					 `passengers`=:hpassengers";
//prepare statement
 $stmt = $dbh->prepare($sql);

if(isset($_POST['vehicle'])) {

//info nga karuyag ig insert
$vehicle 		= 		$_POST['vehicle'];
$destination 	=  		$_POST['destination'];
$driver 		= 		$_POST['driver'];
$hdate 			= 		$_POST['hdate'];
$hpassengers 	=  		$_POST['hpassengers'];

if($vehicle == '') $vehicle = 'empty';
if($driver == '') $driver = 'empty';

//retrieve info by its named parameters
 $stmt->bindParam(':vehicle', $vehicle);
 $stmt->bindParam(':destination', $destination); 
 $stmt->bindParam(':driver', $driver);
 $stmt->bindParam(':hdate', $hdate); 
 $stmt->bindParam(':hpassengers', $hpassengers);
 $stmt->execute();
 }
 */

?>