<?php
require_once '../app/core/Init.php';

$authentication = new AuthController();
$authentication->requestAuth();
$auth = $authentication->requestedAuth();

$logout = new LogoutController();
$logout->requestLogOutURL(); 
$logoutURL = $logout->requestedLogOutURL();


if($auth) {

	//LOGGED IN!
	$session_admin = Session::getSession('user_admin');

	echo 'Welcome '.$session_admin;
?>
			
	<a href="<?=$logoutURL;?>">Logout</a>

<?php
} else {
	//NOT YET
	require_once 'loginform.php';
}
?>

