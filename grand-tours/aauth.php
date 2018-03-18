<?php 

require_once 'autoload.php';

use app\controller\accounts\AccountsAdminLoginController;
use app\lib\session\Session;

Session::ObStart();
Session::SessionStart();

$controller = AccountsAdminLoginController::Create();
$auth = $controller->auth(); 

