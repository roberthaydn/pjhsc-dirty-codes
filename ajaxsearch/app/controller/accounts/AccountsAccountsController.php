<?php 

namespace app\controller\accounts
{
	use app\model\accounts\AccountsAccountsModel;
	use app\view\accounts\AccountsAccountsView;

	class AccountsAccountsController {

		private $_view, $_model;

		public static function Create() : AccountsAccountsController {
			return new AccountsAccountsController;
		}

		public function __construct() {
			$this->_model = AccountsAccountsModel::Create();
			$this->_view = AccountsAccountsView::Create();
		}
		public function __clone() {}

		public function accounts() 
		{
			return $this->_view->accounts();
		}
	}
}
