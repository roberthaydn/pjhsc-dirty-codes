<?php 

	class LoginController {

		//Models
		private $_adminId;
		private $_adminUsername;
		private $_adminPassword;

		//Views
		private $_LoginFormView;

		public function __construct() {
			$this->setView(new LoginFormView());
		}

		private function setView($view){
			$this->_LoginFormView = $view;
		}
		private function getView(){
			return $this->_LoginFormView;
		}

		/*
		* VIEWS
		*
		*/
		//setter
		public function requestLogIn() {
			//hardcoded model.
			$this->_adminId = 432;
			$this->_adminUsername = 'admin123';
			$this->_adminPassword = 'tacloban123';
		}
		//getter
		public function requestedLogIn() {
			
			if(Input::issetPost('username') && Input::issetPost('password')) {
				
				$userNameInput = Input::post('username');
				$userPassInput = Input::post('password');

				$userRequired = RequiredFactory::setRequired($userNameInput, true);

				if($userRequired->isPassed()) {	
					if($userNameInput == $this->_adminUsername && $userPassInput == $this->_adminPassword ) {
							Session::create('user_admin', $this->_adminId);
							$this->getView()->encodedIndexUrl();
							return;
					}
				}		
				
				$this->getView()->encodedDisplayErrMessage();
			}
		}
	}

 ?>
