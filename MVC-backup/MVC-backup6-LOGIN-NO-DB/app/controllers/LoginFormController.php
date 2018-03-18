<?php 

	class LoginFormController{


		public function loadDefaultLogInForm(){

			$view = new LoginFormView();
			$view->loadLoginForm();
		}

	}
 ?>