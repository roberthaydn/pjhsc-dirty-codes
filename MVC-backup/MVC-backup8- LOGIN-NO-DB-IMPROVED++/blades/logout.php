<?php 

require_once '../app/core/Init.php';

Session::unsetSession('user_admin');
header('Location: index.php');

?>