<?php

	class LogoutController {

		private $_view;

		public function __construct() {
			$this->_view = new LogoutView();
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