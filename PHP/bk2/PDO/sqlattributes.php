<?php

	try {
		 $dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
	} catch (PDOException $e) {
		 printf("Connection error: %s", $e->getMessage());
	}

$attributes = array(
    "AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
    "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
    "TIMEOUT"
);

foreach ($attributes as $val) {
    echo "PDO::ATTR_$val: ";
    echo @$dbh->getAttribute(constant("PDO::ATTR_$val")) . "<br>";
}


