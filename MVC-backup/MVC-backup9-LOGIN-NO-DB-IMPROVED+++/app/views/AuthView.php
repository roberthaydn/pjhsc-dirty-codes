<?php

class AuthView {

	private $_auth = false;

	public function encodeAuth() {
		$setSession = Session::setSession('user_session'); 
		$emptySession = Session::emptySession('user_session');
		if($setSession && !$emptySession) {
			$this->_auth = true;
		}
	}

	//getter
	public function getEncodedAuth() {
		return $this->_auth;
	}	
}
	