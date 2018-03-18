<?php 

namespace app\controller\accounts
{
	use app\model\accounts\AccountsRegistrationModel;
	use app\view\accounts\AccountsRegistrationView;

	class AccountsRegistrationController {

		private $_view, $_model;

		public static function Create() : AccountsRegistrationController {
			return new AccountsRegistrationController;
		}

		public function __construct() {
			$this->_model = AccountsRegistrationModel::Create();
			$this->_view = AccountsRegistrationView::Create();
		}
		public function __clone() {}

		public function register() 
		{
			return $this->_view->register();
		}

		public function validate() {
			return $this->_view->validate();
		}
	}
}

