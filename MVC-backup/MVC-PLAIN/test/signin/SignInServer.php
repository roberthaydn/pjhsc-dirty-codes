<?php
	
	include_once('SignInController.php');
    include_once('SignInView.php');
    include_once('SignInAccount.php');
    include_once('AccountDatabase.php');
    include_once('Account.php');
    
    $view = new SignInView();
    $controller = new SignInController();
    $account = new SignInAccount();
    $account->setUserName($_GET['username']);
    $account->setPlainPassword($_GET['password']);
    $controller->setView($view);
    $controller->requestSignIn($account);

    echo $controller->requestedSignIn(); //blade output.

   		 