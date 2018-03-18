<?php 

namespace app\controller\accounts
{
	use app\model\accounts\AccountsResetPasswordModel;
	use app\view\accounts\AccountsResetPasswordView;
	

	class AccountsResetPasswordController {

		private $_view, $_model;

		public static function Create() : AccountsResetPasswordController {
			return new AccountsResetPasswordController;
		}

		public function __construct() {
			$this->_model = AccountsResetPasswordModel::Create();
			$this->_view = AccountsResetPasswordView::Create();
		}
		public function __clone() {}

		public function resetPassword() 
		{
			return $this->_view->resetPassword();
		}
	}
}

