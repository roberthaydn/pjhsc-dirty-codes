<?php

	class AuthController {

		private $_view;
		
		public function __construct() {
			$this->_view = new AuthView();
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
	}