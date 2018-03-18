<?php
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


