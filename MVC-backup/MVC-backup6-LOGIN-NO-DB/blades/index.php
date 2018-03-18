<?php

require_once '../app/core/Init.php';

//session = on
//check if empty = empty

if(Session::setSession('user_admin') && !Session::emptySession('user_admin')) {

	//LOGGED IN!
	$session_admin = Session::getSession('user_admin');

	echo 'Welcome '.$session_admin;

	echo '<a href="logout.php">Logout</a>';

} else {
	//NOT YET
	require_once 'loginform.php';
}

?>
