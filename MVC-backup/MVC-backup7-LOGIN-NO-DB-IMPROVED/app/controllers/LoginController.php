<?php 

	class LoginController {

		private $_view;

		public function __construct() {
			$this->_view = new LoginFormView();
		}

		public function requestLogInForm() {
			$this->_view->loadLoginForm();
		}

		/*
		* VIEWS
		*
		*/	
		//setter
		public function requestLogIn() {
			$this->_view->encodeLogIn();
		}
		//getter
		public function requestedLogIn() {
			return $this->_view->getEncodedLogIn();
		}

		/*
		*	Log In Authentication
		*/
		//setter
		public function requestAuth() {
			$this->_view->encodeAuth();
		}
		//getter
		public function requestedAuth() {
			return $this->_view->getEncodedAuth();
		}

		/*
		*	URL's
		*/
		//setter
		public function requestLogOutURL() {
			$this->_view->encodeLogOutURL();	
		}
		//getter
		public function requestedLogOutURL() {
			return $this->_view->getEncodedLogOutURL();	
		}
	}
 ?>