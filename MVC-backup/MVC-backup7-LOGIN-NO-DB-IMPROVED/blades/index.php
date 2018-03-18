<?php
require_once '../app/core/Init.php';

$controller = new LoginController();
$controller->requestLogOutURL(); 
$controller->requestAuth();

$auth = $controller->requestedAuth();
$logoutURL = $controller->requestedLogOutURL();

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

