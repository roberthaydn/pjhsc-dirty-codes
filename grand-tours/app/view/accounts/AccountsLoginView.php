<?php

namespace app\view\accounts 
{
	use app\model\accounts\AccountsLoginModel;
	use app\lib\session\Session;
	use app\lib\validation\factory\Input;
	use app\lib\validation\factory\Required;

	class AccountsLoginView {

		private $_model;

		private $_session_id = 'session_accounts', 
				$_username, 
				$_password;

		public static function Create() : AccountsLoginView {
			return new AccountsLoginView;
		}

		private function __construct() {
			$this->_model = AccountsLoginModel::Create();
		}
		private function __clone() {}

		public function auth() {
			if(Session::IsSetSession($this->_session_id) && !Session::IsEmptySession($this->_session_id)) {
				return true;
			} 
		}

		public function login($uname, $pword) {
		
			if(Input::IsIssetPost($uname) && Input::IsIssetPost($pword)) {
				$this->_username = Input::Post($uname);
				$this->_password = md5(Input::Post($pword));

				$userFieldRequired = Required::setRequired($this->_username, true); 

				if(!$userFieldRequired->isPassed()) {
					return 'Incorrect Username Or Password';
				}

				 return $this->_model->readData($this->_username, $this->_password, $this->_session_id);		
			} 
		}

		public function logout() {
			return $this->_session_id;
		}
	}
}




