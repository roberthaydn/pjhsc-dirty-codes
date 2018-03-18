<?php
//selecting data
try {
	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
} catch (PDOException $exception) {
	printf("Connection error: %s", $exception->getMessage());
}

//query
$sql = "UPDATE `employees` SET 
					 `firstname`=:firstname,
					 `lastname`=:lastname,
				 `gender`=:gender
					  WHERE `id`=36";
//prepare statement
$stmt = $dbh->prepare($sql);

//info nga karuyag ig insert
$firstname = 'c';
$lastname = 'b';
$gender = 'a';

//retrieve info by its named parameters
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname); 
$stmt->bindParam(':gender', $gender); 
$stmt->execute();

echo '<pre>';
print_r($stmt->errorInfo());
echo '</pre>';

?>