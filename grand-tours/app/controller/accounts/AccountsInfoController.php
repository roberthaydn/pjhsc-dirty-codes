<?php 

namespace app\controller\accounts
{
	use app\model\accounts\AccountsInfoModel;
	use app\view\accounts\AccountsInfoView;

	class AccountsInfoController {

		private $_view, $_model;

		public static function Create() : AccountsInfoController {
			return new AccountsInfoController;
		}

		public function __construct() {
			$this->_model = AccountsInfoModel::Create();
			$this->_view = AccountsInfoView::Create();
		}
		public function __clone() {}

		public function getData($data) 
		{
			return $this->_view->data($data);
		}
	}
}

