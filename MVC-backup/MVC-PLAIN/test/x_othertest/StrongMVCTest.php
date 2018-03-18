<?php

	/*
	* Note: This TestCase doesn't must call Session::Start()
	*	that includes the session_start() and ob_start().
	*/
	class SessionTest extends PHPUnit_Framework_TestCase{

		private $session_var;
		private $session_value;

		function tearDown(){
			$isSessionSet = isset($_SESSION['cls']);
			unset($isSessionSet);
		}

		function testSimpleSession(){
			$_SESSION['cls'] = '123';
			$isSessionSet = isset($_SESSION['cls']);
			$this->assertEquals(true, $isSessionSet);
			unset($isSessionSet);
		}
		function testSessionCreate(){
			$this->session_var = 'session_var';
			$this->session_value = '123456';
			Session::create($this->session_var, $this->session_value);
			$isSessionSet = isset($_SESSION[$this->session_var]);
			
			$this->assertEquals(true, $isSessionSet);	
		}
		function testIsSessionSet(){
			$this->session_var = 'session_var';
			$this->session_value = '123456';
			$isSessionSet = Session::isSessionSet($this->session_var);
			
			$this->assertEquals(false, $isSessionSet);
			
			Session::create($this->session_var, $this->session_value);
			$isSessionSet = Session::isSessionSet($this->session_var);
			
			$this->assertEquals(true, $isSessionSet);
		}
		function testIsSessionEmpty(){
			$this->session_var = 'session_var';
			$isSessionEmpty = Session::isSessionEmpty($this->session_var);
			
			$this->assertEquals(true, $isSessionEmpty);

			$this->session_var = 'session_var';
			$this->session_value = '123456';
			Session::create($this->session_var, $this->session_value);
			$isSessionEmpty = Session::isSessionEmpty($this->session_var);
			
			$this->assertEquals(false, $isSessionEmpty);
		}
		function testUnsetSession(){
			$this->session_var = 'session_var';
			$this->session_value = '123456';
			Session::create($this->session_var, $this->session_value);
			$isSessionSet = isset($_SESSION[$this->session_var]);
			
			$this->assertEquals(true, $isSessionSet);
			
			Session::unsetSession($this->session_var);
			$isSessionSet = isset($_SESSION[$this->session_var]);

			$this->assertEquals(false, $isSessionSet);
		}
		/**
		* @expectedException Exception
		*/
		function testSessionCreate_NullSessionName_Exception(){
			$this->session_var = null;
			$this->session_value = '123456';
			Session::create($this->session_var, $this->session_value);
		}
		/**
		* @expectedException Exception
		*/
		function testSessionCreate_NullSessionValue_Exception(){
			$this->session_var = 'session_var';
			$this->session_value = null;
			Session::create($this->session_var, $this->session_value);
		}
		/**
		* @expectedException Exception
		*/
		function testSessionCreate_EmptySessionName_Exception(){
			$this->session_var = '';
			$this->session_value = '123456';
			Session::create($this->session_var, $this->session_value);
		}
		/**
		* @expectedException Exception
		*/
		function testSessionCreate_EmptySessionValue_Exception(){
			$this->session_var = 'session_var';
			$this->session_value = '';
			Session::create($this->session_var, $this->session_value);
		}
	}
	class SessionAuthenticationTest extends PHPUnit_Framework_TestCase{

		function setUp(){
			//create session.
			$_SESSION['cls'] = '123';
			$isSessionSet = isset($_SESSION['cls']);
		}
		function tearDown(){
			$isSessionSet = isset($_SESSION['cls']);
			unset($isSessionSet);
		}
		function testAuthentic(){
			$b = SessionAuthentication::isAuthentic('cls');
			$this->assertTrue($b);
		}
	}




	class LoginController {

		//Models
		private $_adminId;
		private $_adminUsername;
		private $_adminPassword;

		//Views
		private $_LoginFormView;

		public function __construct() {
			$this->setView(new LoginFormView()); //*introduce parameter.
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
		public function requestedLogIn($user_admin) {

			Session::create($user_admin, $this->_adminId);	//*extract admin_id.

			if(Input::issetPost('username') && Input::issetPost('password')) {
				
				$userNameInput = Input::post('username');
				$userPassInput = Input::post('password');

				$userRequired = RequiredFactory::setRequired($userNameInput, true);

				if($userRequired->isPassed()) {	
					if($userNameInput == $this->_adminUsername && $userPassInput == $this->_adminPassword ) {
							$this->getView()->encodedIndexUrl();
							return;
					}
				}
				$this->getView()->encodedDisplayErrMessage();
			}
		}
	}
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



	/**
	* Call all this rquest and requested in LoginController.
	* @deprecated @see SessionAuthentication.
	*/
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
	/**
	* @deprecated @see SessionAuthentication.
	*/
	class AuthView {

		private $_auth = false;

		/*
		*	Log In Authentication
		*/
		//setter
		public function encodeAuth($session) { /*set auth session*/
			$setSession = Session::setSession($session); 
			$emptySession = Session::emptySession($session);
			if($setSession && !$emptySession) {
				$this->_auth = true;
			}
		}

		//getter
		public function getEncodedAuth() { /* get if authenticated.*/
			return $this->_auth;
		}	
	}







	/**
	*
	*	Determines if the session variable is Authenticated.
	*	
	*	@version 0.1
	*	@author Abriel I, Ronnel R.
	*/
	class SessionAuthentication {

		/**
		*	Determines the session variable if authentic.
		* 	@static
		* 	@param string $session_var 	(required)The current session variable.
		* 	@return bool.
		*/
		static function isAuthentic($session_var){
			$isSessionSet = Session::isSessionSet($session_var);
			$isSessionEmpty = Session::isSessionEmpty($session_var);
			return ($isSessionSet && !$isSessionEmpty);
		}
	}
	
	/**
	*
	* 	Serves as the session for the entire application.
	*
	* 	@version 0.1
	* 	@author Abriel I, Ronnel R.
	* 	Changes: Input Exception Handling for all the methods.
	*/
	class Session {
	
		/**
		*
		* 	Serves as the creation for the current session.
		* 
		* 	@static
		* 	@param string $session_var 	(required)The current session variable.
		* 	@param string $session_value 	(required)The current value you want to store.
		* 	Changes: No return value. @see Session::getSession(session_var), instead.
		* 	Note: Does not involve starting session, you must call @see Session::start().
		*/	
		public static function create($session_var, $session_value) {
			self::throwExceptionIfNull($session_var);
			self::throwExceptionIfNull($session_value);
			self::throwExceptionIfNotString($session_var);
			self::throwExceptionIfNotString($session_value);	
			self::throwExceptionIfEmptyString($session_var);
			self::throwExceptionIfEmptyString($session_value);
			$_SESSION[$session_var] = $session_value;
		}
		/**
		*
		* 	Returns if the current session variable is set.
		* 
		* 	@static
		* 	@deprecated 
		* 	@see Session::isSessionSet(session_var:string) instead.
		* 	@param string $session_var 	(required)The current session variable.
		* 	@return bool.
		* 	Note: Does not involve starting session, you must call @see Session::start().
		*/
		public static function setSession($session_var) {
			self::throwExceptionIfNull($session_var);
			self::throwExceptionIfNotString($session_var);
			self::throwExceptionIfEmptyString($session_var);
			return isset($_SESSION[$session_var]);
		}
		/**
		*
		* 	Returns if the current session variable is set.
		*
		* 	@static
		* 	@param string $session_var 	(required)The current session variable.
		* 	@return bool.
		* 	Note: Does not involve starting session, you must call @see Session::start().
		*/
		public static function isSessionSet($session_var) {
			self::throwExceptionIfNull($session_var);
			self::throwExceptionIfNotString($session_var);
			self::throwExceptionIfEmptyString($session_var);
			return isset($_SESSION[$session_var]);
		}
		/**
		*
		* 	Returns if the current session variable is empty.
		* 
		* 	@static
		* 	@deprecated
		* 	@see Session::isSessionSet(session_var:string) instead.
		* 	@param string $session_var 	(required)The current session variable.
		* 	@return bool.
		* 	Note: Does not involve starting session, you must call @see Session::start().
		*/
		public static function emptySession($session) {
			self::throwExceptionIfNull($session_var);
			self::throwExceptionIfNotString($session_var);
			self::throwExceptionIfEmptyString($session_var);
			return empty($_SESSION[$session]);
		}
		/**
		*
		* 	Returns if the current session variable is empty.
		*
		* 	@static
		* 	@param string $session_var 	(required)The current session variable.
		* 	@return bool
		* 	Note: Does not involve starting session, you must call @see Session::start().
		*/
		public static function isSessionEmpty($session_var){
			self::throwExceptionIfNull($session_var);
			self::throwExceptionIfNotString($session_var);
			self::throwExceptionIfEmptyString($session_var);
			return empty($_SESSION[$session_var]);
		}
		/**
		*
		* 	Serves for unsetting for current session.
		* 
		* 	@static
		* 	@param string $session_var 	(required)The current session variable.
		* 	Note: Does not involve starting session, you must call @see Session::start().
		*/
		public static function unsetSession($session_var) {
			self::throwExceptionIfNull($session_var);
			self::throwExceptionIfNotString($session_var);
			self::throwExceptionIfEmptyString($session_var);
			unset($_SESSION[$session_var]);
		}
		/**
		*
		* 	Serves as getting the current session.
		*
		* 	@static
		* 	@param string $session_var 	(required)The current session variable.
		* 	@return bool.
		* 	Note: Does not involve starting session, you must call @see Session::start().
		*/
		public static function getSession($session_var) {
			return $_SESSION[$session_var];
		}
		/**
		*
		* 	Serves in starting the current session.
		*
		* 	@static
		* 	@return bool.
		*/
		public static function sessionStart(){
			ob_start();
			session_start();
		}
		private static function throwExceptionIfNull($param){
			if(is_null($param)){
				throw new \Exception($param.' is null.');
			}
		}
		private static function throwExceptionIfNotString($param){
			if($param instanceof string){
				throw new \Exception($param.' is not a string type.');
			}
		}
		private static function throwExceptionIfEmptyString($param){
			if($param == ''){
				throw new \Exception($param.' is empty string.');
			}
		}
	}