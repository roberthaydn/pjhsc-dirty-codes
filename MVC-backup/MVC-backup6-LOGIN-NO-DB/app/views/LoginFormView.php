<?php 

	class LoginFormView
	{
		public function loadLoginForm(){
			//hardcoded model.
			$adminId = 432;
			$adminUsername = 'admin123';
			$adminPassword = 'tacloban123';

			if(Input::issetPost('username') && Input::issetPost('password')) {
				
				$userNameInput = Input::post('username');
				$userPassInput = Input::post('password');

				if($userNameInput == $adminUsername && $adminPassword == $userPassInput) {
					Session::create('user_admin', $adminId);
					header('Location: index.php');
				} else {
					echo 'Incorrect username or password!';
				}
			}
		} 
	}

 ?>