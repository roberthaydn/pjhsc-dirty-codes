<?php 

//start a session
session_start();

//create a key for hash_hmac function
if(empty($_SESSION['key']))
$_SESSION['key'] = bin2hex(random_bytes(32));

//create csrf token
$csrf = hash_hmac('sha256', 'this is some string: index.php', $_SESSION['key']);

//validate token
if(isset($_GET['submit'])) {
	if(hash_equals($csrf, $_GET['csrf'])) {
		echo 'Your name is: '.$_GET['name'];
		//unset($_SESSION['key']);
	} else {
		echo 'CSRF Token Failed';
	}
}

?>

<form action="index.php" method="GET">
    <input type="text" name="name">
    <input type="hidden" name="csrf" value="<?php echo $csrf; ?>">
	<input type="submit" name="submit" value="submit">
</form>