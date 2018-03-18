<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>

<body>
	<h1> LOG IN - ADMIN </h1>
	<form action="index.php" method="POST">
		 Username:<br><input type="text" name="username"/><br>
		 Password:<br><input type="password" name="password"/><br><br>
		 <input type="submit"/>	
	</form>
</body>
</html><br>


<?php

$controller = new LoginController();
$controller->requestLogIn();
$controller->requestedLogIn();

?>
