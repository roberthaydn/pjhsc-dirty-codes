<?php 

require_once 'autoload.php';

use app\controller\accounts\AccountsAdminLoginController;
use app\lib\session\Session;

Session::SessionStart();

$controller = AccountsAdminLoginController::Create();
$session_id = $controller->logout();

Session::UnsetSession($session_id);

header('Location: admin.php');

?>
