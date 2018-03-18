<?php

namespace app\view\accounts 
{
	use app\model\accounts\AccountsInfoModel;

	class AccountsInfoView {

		private $_model;

		private $_session_id = 'session_accounts', 
				$_username, 
				$_password;

		public static function Create() : AccountsInfoView {
			return new AccountsInfoView;
		}

		private function __construct() {
			$this->_model = AccountsInfoModel::Create();
		}
		private function __clone() {}

		public function data($data) 
		{
			return $this->_model->readData($data);
		}
	}
}



