<?php

 /*

 	boolean PDOStatement::setAttribute(int attribute, mixed value)


	PDO's CONNECTION-RELATED OPTIONS
		-> PDO::ATTR_AUTOCOMMIT	  ----  PDO will commit each query as it’s executed.
		-> PDO::ATTR_CASE         ----  convert the retrieved column character casing to all uppercase, to convert it to all lowercase, or to use the columns exactly as they’re found in the database. 
			 • PDO::CASE_UPPER
			 • PDO::CASE_LOWER
			 • PDO::CASE_NATURAL
   		-> PDO::ATTR_EMULATE_PREPARES ---- Makes it possible for prepared statements. 
   		-> PDO::ATTR_ORACLE_NULLS 	  ---- TRUE->empty strings, default->FALSE.
		-> PDO::ATTR_PERSISTENT       ---- Determines whether the connection is persistent.
		-> PDO::ATTR_PREFETCH     	  ---- Retrieves several rows even if the client is requesting one row at a time.
		-> PDO::ATTR_TIMEOUT	  	  ---- Sets the number of seconds to wait before timing out.
		-> PDO::DEFAULT_FETCH_MODE 	  ---- Set the default fetching mode (associative arrays, indexed arrays, or objects).


	Four ATTRIBTUES for the Client, SERVER, Connection Status
		-> PDO::ATTR_SERVER_INFO	    ---- Contains database-specific server information.
		-> PDO::ATTR_SERVER_VERSION	    ---- Contains information pertinent to the database server’s version number.	
		-> PDO::ATTR_CLIENT_VERSION		---- Contains information pertinent to the database client’s version number.
		-> PDO::ATTR_CONNECTION_STATUS 	---- Contains database-specific information about the connection status.

	**********************************************************************************************************
	HANDLING ERRORS
	**********************************************************************************************************
		ATTR_ERRMODE ----  PDO supports three error-reporting modes
		• PDO::ERRMODE_EXCEPTION  ---- Throws an exception using the PDOException class
		• PDO::ERRMODE_SILENT     ---- Does nothing if an error occurs
		• PDO::ERRMODE_WARNING	   ---- Produces a PHP E_WARNING message if a PDO-related error occurs.
	**********************************************************************************************************

 */

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>