<?php
/*
You should call the beginTransaction and commit() functions for most table altering queries.
Although you could use the prepared statments and execute.

NOTE:
MySQL implicitly calls the commit() function on CREATE TABLE and DROP TABLE queries, so rollback is not possible.

Also, if you're wanting to pass variables to an alter table query, make sure to sanitize your user input (if that's where it's coming from), and create a stored procedure on your db, then call it using PDO and attach your variables for inout. Just a thought in regards to how your question was worded.

*/

//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

//$dbh->beginTransaction();

/* Change the database schema and data */
//$dbh->exec("DROP TABLE fruit");

$dbh->exec("ALTER TABLE `employees` DROP id");
$dbh->exec("ALTER TABLE `employees` ADD id INT(11) NOT NULL AUTO_INCREMENT Primary key FIRST");

/* Commit changes */
//$dbh->commit();

?>
