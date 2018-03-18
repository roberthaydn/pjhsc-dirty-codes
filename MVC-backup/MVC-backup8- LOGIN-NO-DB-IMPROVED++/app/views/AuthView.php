<?php

	class AuthView {

		private $_auth = false;

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
	}
	