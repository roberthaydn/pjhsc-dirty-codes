<?php
    
    class SignInTest extends PHPUnit_Framework_TestCase {

        private $_view;
        private $_controller;
        private $_account;

        function setUp(){
            $this->_view = new SignInView();
            $this->_controller = new SignInController();
            $this->_account = new LogInAccount();
        }
        function tearDown(){
            $this->_view = null;
            $this->_controller = null;
            $this->_account = null;
        }
        function testSignIn_ValidAccount(){
            $this->_account->setUserName('jon');
            $this->_controller->setView($this->_view);
            $this->_controller->requestSignIn($this->_account);
            $this->_controller->requestedSignIn(); //blade output.
        }
        function testSignIn_InvalidAccount(){
        	$this->_controller->setView($this->_view);
        	$this->_controller->requestSignIn($this->_account);
        	$this->_controller->requestedSignIn(); //blade output.
        }
        function testAccountDB_getValidAccount(){
            $db = new AccountDatabase();
            $account = new LogInAccount();
            $account->setUserName('jon');
            $db_account = $db->get($account);

            echo $db_account->getID();
            echo $db_account->getUserName();
            echo $db_account->getPlainPassword();
            echo $db_account->getEncryptedPassword();
        }
        function testAccountDB_getInvalidAccount(){
            $db = new AccountDatabase();
            $account = new LogInAccount();
            $account->setUserName('ramsey');
            $db_account = $db->get($account);
            echo $db_account->getID();
            echo $db_account->getUserName();
            echo $db_account->getPlainPassword();
            echo $db_account->getEncryptedPassword();
        }
    }
    class SignInView{
    	function getEncodedIndex(){
    		echo 'index.php';	
    	}	
		function getEncodedDisplayErrorMessage(){
			echo 'login error.';
		}
    }
    class SignInController{

    	private $_view; //bridge to the view.
    	private $_account; //bridge to the account.
        private $_database; //bridge to the database.

    	function requestSignIn($account){
            $this->_database = new AccountDatabase();
            $this->setSigInAccount($account);
    	}
    	function requestedSignIn() {
            $database_username = $this->_database->get($this->_account)->getUserName();
            $account_username = $this->_account->getUserName();
            if($database_username == $account_username){
                /*cannot send to cookie.*/
                //$this->createSession($this->getSignInAccount());
                $this->redirectIndex();
                return;
            }
    		$this->displayErrorMessage();
    	}
    	function setView($view){$this->_view = $view; }
    	function setModel($model){throw new \Exception('Not supported yet.');}
    	private function getView(){return $this->_view; }
    	private function displayErrorMessage(){$this->_view->getEncodedDisplayErrorMessage(); }
    	private function redirectIndex(){$this->_view->getEncodedIndex(); }
        private function setSigInAccount($account){
            if($account == null){
                throw new \Exception('Account is null.');
            }
            $this->_account = $account;
        }
        private function getSignInAccount(){return $this->_account; }
        private function createSession($account){
            Session::sessionStart();
            Session::create('user', $account->getID());
        }
    }

    interface Account{

		function setID($id);
		function setUserName($userName);
		function setPlainPassword($plainPassword);

		function getID();
		function getUserName();
		function getPlainPassword();
		function getEncryptedPassword();

        function isNull();
	}
    class NullLogInAccount implements Account{

        private $_id = 0;
        private $_userName = 'Username is not available.';
        private $_plainPassword = 'Plain password is not available.';
        private $_encryptedPassword = 'Encrypted password is not available.';

        function setID($id){throw new \Exception('Not supported yet.');}
        function setUserName($userName){throw new \Exception('Not supported yet.');}
        function setPlainPassword($plainPassword){throw new \Exception('Not supported yet.');}
        function setEncryptedPassword($encryptedPassword){throw new \Exception('Not supported yet.');}

        function getID(){return $this->_id; }
        function getUserName(){return $this->_userName; }
        function getPlainPassword(){return $this->_plainPassword; }
        function getEncryptedPassword(){return $this->_encryptedPassword; }

        function isNull(){
            return true;
        }
    }
	class LogInAccount implements Account{

		private $_id;
		private $_userName;
		private $_plainPassword;
		private $_encryptedPassword;

		function setID($id){$this->_id = $id; }
		function setUserName($userName){$this->_userName = $userName; }
		function setPlainPassword($plainPassword){$this->_plainPassword = $plainPassword; }
	 	function setEncryptedPassword($encryptedPassword){$this->_encryptedPassword = $encryptedPassword; }

		function getID(){return $this->_id; }
		function getUserName(){return $this->_userName; }
		function getPlainPassword(){return $this->_plainPassword; }
		function getEncryptedPassword(){return $this->_encryptedPassword; }

        function isNull(){
            return false;
        }
	}
    /**
    * @version 0.1
    */
    interface Database{
        function add();
        function delete();
        function update();
        function get($obj);
    }
    /**
    * @version 0.1
    * Changes: removed constructor implementation.
    *   - static members.
    */
    class Connection {

        private static $_IP = 'localhost';
        private static $_ROOT = 'root';
        private static $_PASSWORD = '';
        private static $_DB = 'group_1';   

        private static function getConnection() {
            try {
                return new PDO(self::getConnectionString(), self::getUser(), self::getPassword());
            } catch(PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
        }
        private function __construct(){}
        public static function Connect() {return self::getConnection(); }
        private static function getConnectionString(){return 'mysql:host='.self::getIP().'; dbname='.self::getDB(); }
        private static function getIP(){return self::$_IP; }
        private static function getDB(){return self::$_DB; }
        private static function getUser(){return self::$_ROOT; }
        private static function getPassword(){return self::$_PASSWORD; }
    }
    class AccountDatabase implements Database{
        private $_pdo;
        private $_account;            

        function __construct(){
            $this->_pdo = Connection::Connect(); 
        }
        function add(){
            throw new \Exception('Not supported yet.');
        }
        function delete(){
            throw new \Exception('Not supported yet.');
        }
        function update(){
            throw new \Exception('Not supported yet.');
        }
        function get($obj){
            $query = "SELECT * FROM `account` WHERE `username` = :username;";
            $stmnt = $this->_pdo->prepare($query);
            $stmnt->bindValue(':username', $obj->getUserName());
            $stmnt->execute();
            $account = null;

            if($stmnt->rowCount() == 0){
                $account = new NullLogInAccount();
            }else{
                $row = $stmnt->fetch(PDO::FETCH_ASSOC);
                $account = new LogInAccount();
                $account->setID((integer)$row['id']);
                $account->setUserName($row['username']);
                $account->setPlainPassword($row['password']);
                $account->setEncryptedPassword($row['password']);
            }
            return $account;
        }
        function setAccount($account){
            if($account == null){
                throw new \Exception('AccountDatabase:setAccount -> Account is null.');
            }
            if(!($account instanceof Account)){
                throw new \Exception('AccountDatabase:setAccount -> Invalid parameter, not an account.');
            }
            $this->_account = $account;
        }
        private function getAccount(){
            return $this->_account;
        }
    }
    /**
    *
    *   Serves as the session for the entire application.
    *
    *   @version 0.1
    *   @author Abriel I, Ronnel R.
    *   Changes: Input Exception Handling for all the methods.
    */
    class Session {
    
        /**
        *
        *   Serves as the creation for the current session.
        * 
        *   @static
        *   @param string $session_var  (required)The current session variable.
        *   @param string $session_value    (required)The current value you want to store.
        *   Changes: No return value. @see Session::getSession(session_var), instead.
        *   Note: Does not involve starting session, you must call @see Session::start().
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
        *   Returns if the current session variable is set.
        * 
        *   @static
        *   @deprecated 
        *   @see Session::isSessionSet(session_var:string) instead.
        *   @param string $session_var  (required)The current session variable.
        *   @return bool.
        *   Note: Does not involve starting session, you must call @see Session::start().
        */
        public static function setSession($session_var) {
            self::throwExceptionIfNull($session_var);
            self::throwExceptionIfNotString($session_var);
            self::throwExceptionIfEmptyString($session_var);
            return isset($_SESSION[$session_var]);
        }
        /**
        *
        *   Returns if the current session variable is set.
        *
        *   @static
        *   @param string $session_var  (required)The current session variable.
        *   @return bool.
        *   Note: Does not involve starting session, you must call @see Session::start().
        */
        public static function isSessionSet($session_var) {
            self::throwExceptionIfNull($session_var);
            self::throwExceptionIfNotString($session_var);
            self::throwExceptionIfEmptyString($session_var);
            return isset($_SESSION[$session_var]);
        }
        /**
        *
        *   Returns if the current session variable is empty.
        * 
        *   @static
        *   @deprecated
        *   @see Session::isSessionSet(session_var:string) instead.
        *   @param string $session_var  (required)The current session variable.
        *   @return bool.
        *   Note: Does not involve starting session, you must call @see Session::start().
        */
        public static function emptySession($session) {
            self::throwExceptionIfNull($session_var);
            self::throwExceptionIfNotString($session_var);
            self::throwExceptionIfEmptyString($session_var);
            return empty($_SESSION[$session]);
        }
        /**
        *
        *   Returns if the current session variable is empty.
        *
        *   @static
        *   @param string $session_var  (required)The current session variable.
        *   @return bool
        *   Note: Does not involve starting session, you must call @see Session::start().
        */
        public static function isSessionEmpty($session_var){
            self::throwExceptionIfNull($session_var);
            self::throwExceptionIfNotString($session_var);
            self::throwExceptionIfEmptyString($session_var);
            return empty($_SESSION[$session_var]);
        }
        /**
        *
        *   Serves for unsetting for current session.
        * 
        *   @static
        *   @param string $session_var  (required)The current session variable.
        *   Note: Does not involve starting session, you must call @see Session::start().
        */
        public static function unsetSession($session_var) {
            self::throwExceptionIfNull($session_var);
            self::throwExceptionIfNotString($session_var);
            self::throwExceptionIfEmptyString($session_var);
            unset($_SESSION[$session_var]);
        }
        /**
        *
        *   Serves as getting the current session.
        *
        *   @static
        *   @param string $session_var  (required)The current session variable.
        *   @return bool.
        *   Note: Does not involve starting session, you must call @see Session::start().
        */
        public static function getSession($session_var) {
            return $_SESSION[$session_var];
        }
        /**
        *
        *   Serves in starting the current session.
        *
        *   @static
        *   @return bool.
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