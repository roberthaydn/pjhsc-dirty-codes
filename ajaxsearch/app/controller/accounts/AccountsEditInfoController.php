<?php 

namespace app\controller\accounts
{
	use app\model\accounts\AccountsEditInfoModel;
	use app\view\accounts\AccountsEditInfoView;

	class AccountsEditInfoController {

		private $_view, $_model;

		public static function Create() : AccountsEditInfoController {
			return new AccountsEditInfoController;
		}

		public function __construct() {
			$this->_model = AccountsEditInfoModel::Create();
			$this->_view = AccountsEditInfoView::Create();
		}
		public function __clone() {}

		public function getData() 
		{
			return $this->_view->data();
		}
	}
}

