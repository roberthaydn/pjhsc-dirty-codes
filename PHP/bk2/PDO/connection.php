<?php
//

try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 	//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exception) {
	echo "Connection error: " . $exception->getMessage();
}

?>












