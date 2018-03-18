<?php 

require_once 'autoload.php';

use app\controller\accounts\AccountsLoginController;
use app\lib\session\Session;

Session::ObStart();
Session::SessionStart();

$controller = AccountsLoginController::Create();
$auth = $controller->auth(); 

