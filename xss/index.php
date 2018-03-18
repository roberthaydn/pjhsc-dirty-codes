<?php 

require_once 'vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php';

/*

<a href="data:text/html;base64,PHNjcmlwdD5hbGVydCgiSGVsbG8iKTs8L3NjcmlwdD4=">test</a>
<a href="data:text/html,<script>alert(document.domain)</script>">click</a>
<a href=\"\u0001java\u0003script:alert(1)\">CLICK<a>
<iframe width="560" onclick="alert('xss')" height="315" src="https://www.youtube.com/embed/foobar?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

*/

$purifier = new HTMLPurifier();

if(isset($_POST['submit'])) {
	$xss = $_POST['xss'];
	$sanitized = $purifier->purify($xss);
	echo $sanitized;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<input type="text" name="xss">
		<input type="submit" value=" Submit " name="submit">
	</form>
</body>
</html>