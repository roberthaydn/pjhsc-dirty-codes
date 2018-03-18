<?php 

	class LoginFormView
	{	
		//Model
		private $_adminId;
		private $_adminUsername;
		private $_adminPassword;
		
		//Views
		private $_auth = false;
		private $_logout;


		public function encodeLogIn() {
			//hardcoded model.
			$this->_adminId = 432;
			$this->_adminUsername = 'admin123';
			$this->_adminPassword = 'tacloban123';
		}

		public function getEncodedLogIn() {

			if(Input::issetPost('username') && Input::issetPost('password')) {
				
				$userNameInput = Input::post('username');
				$userPassInput = Input::post('password');
				$INDEXURL = 'index.php';

				$userRequired = RequiredFactory::setRequired($userNameInput, true);

				if($userRequired->isPassed()) {
					if($userNameInput == $this->_adminUsername && $userPassInput == $this->_adminPassword) {
						Session::create('user_admin', $this->_adminId);
						header('Location: '.$INDEXURL);
					} else {
						echo '<span style="color:red">Incorrect username or password!</span>'; 
					}
				} else {
					echo '<span style="color:red">Incorrect username or password!</span>'; 
				}
			}
		}

		/*
		*	Log In Authentication
		*/
		//setter
		public function encodeAuth() {
			$setSession = Session::setSession('user_admin'); 
			$emptySession = Session::emptySession('user_admin');
			if($setSession && !$emptySession) {
				$this->_auth = true;
			}
		}

		//getter
		public function getEncodedAuth() {
			return $this->_auth;
		}		

		/*
		*	URL's
		*/
		//setter
		public function encodeLogoutURL() {
			$this->_logout = 'logout.php';
		}
		//getter
		public function getEncodedLogOutURL() {
			return $this->_logout;
		}
	}
 ?>


