<?php

namespace app\view\accounts 
{
	use app\model\accounts\AccountsAccountsModel;

	class AccountsAccountsView {

		private $_model;

		private $_session_id = 'session_admin', 
				$_username, 
				$_password;

		public static function Create() : AccountsAccountsView {
			return new AccountsAccountsView;
		}

		private function __construct() {
			$this->_model = AccountsAccountsModel::Create();
		}
		private function __clone() {}

		public function accounts() 
		{
			return $this->_model->readData();			
		}
	}
}



