<?php 

namespace app\controller\accounts
{
	use app\model\accounts\AccountsLoginModel;
	use app\view\accounts\AccountsLoginView;

	class AccountsLoginController {

		private $_view, $_model;

		public static function Create() : AccountsLoginController {
			return new AccountsLoginController;
		}

		public function __construct() {
			$this->_model = AccountsLoginModel::Create();
			$this->_view = AccountsLoginView::Create();
		}
		public function __clone() {}

		public function auth() : bool
		{
			if($this->_view->auth())
			{
				return true;
			}
			return false;
		}

		public function login($uname, $pword)
		{
			return $this->_view->login($uname, $pword);
		}

		public function logout() 
		{
			return $this->_view->logout();
		}
	}
}

