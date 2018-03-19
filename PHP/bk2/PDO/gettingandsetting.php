<?php

new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
echo $dbh->getAttribute(PDO::ATTR_CONNECTION_STATUS).'<br>'.
	 $dbh->getAttribute(PDO::ATTR_CLIENT_VERSION).'<br>'.
	 $dbh->getAttribute(PDO::ATTR_SERVER_VERSION).'<br>'.
	 $dbh->getAttribute(PDO::ATTR_SERVER_INFO).'<br>';
?>

