<?php
//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

 $sql = "INSERT INTO product SET `sku`=:sku,  `title`=:title";
 $stmt = $dbh->prepare($sql);

 $sku = 'hellosdfsd';
 $title = 'soap';

 $stmt->bindParam(':sku', $sku);
 $stmt->bindParam(':title', $title);
 $stmt->execute();

 echo '<pre>';
 print_r($stmt->errorInfo());
 echo '</pre>';

?>