<?php

namespace app\view\accounts 
{
	use app\model\accounts\AccountsResetPasswordModel;
	use app\lib\validation\factory\Input;

	class AccountsResetPasswordView {

		private $_model;
		private $_id;

		public static function Create() : AccountsResetPasswordView {
			return new AccountsResetPasswordView;
		}

		private function __construct() {
			$this->_model = AccountsResetPasswordModel::Create();
		}
		private function __clone() {}

		public function resetPassword() 
		{

			$id = @$_GET['id'];
			return $this->_model->updateData($id);
		}
	}
}



