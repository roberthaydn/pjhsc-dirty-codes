<?php 


require_once 'autoload.php';

use app\controller\accounts\AccountsLoginController;
use app\lib\session\Session;

Session::SessionStart();

$controller = AccountsLoginController::Create();
$session_id = $controller->logout();

Session::UnsetSession($session_id);

header('Location: reservation.php');

?>
