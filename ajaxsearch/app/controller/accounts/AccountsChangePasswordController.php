<?php 

namespace app\controller\accounts
{
	use app\model\accounts\AccountsChangePasswordModel;
	use app\view\accounts\AccountsChangePasswordView;

	class AccountsChangePasswordController {

		private $_view, $_model;

		public static function Create() : AccountsChangePasswordController {
			return new AccountsChangePasswordController;
		}

		public function __construct() {
			$this->_model = AccountsChangePasswordModel::Create();
			$this->_view = AccountsChangePasswordView::Create();
		}
		public function __clone() {}

		public function changePassword() 
		{
			return $this->_view->changePassword();
		}
	}
}

