<?php

 class LogoutView {

 	private $_logout;

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
 