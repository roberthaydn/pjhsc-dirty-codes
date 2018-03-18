<?php 

namespace app\model\accounts 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\accounts\AccountsModel;

	class AccountsAccountsModel {

		private $_model;

		private $_session_id, 
				$_username, 
				$_password,
				$_firstname,
				$_lastname,
				$_gender,
				$_email,
				$_mobile_no,
				$_address;

		public static function Create() : AccountsAccountsModel {
			return new AccountsAccountsModel;
		}

		private function __construct() {
			$this->_model = AccountsModel::Create();
		}
		private function __clone() {}

		/**
		* Create, Read(retrieve), Update, Delete
		*/
		public function createData() {
			throw new \Exception('Not supported yet.'); 
		}

		public function readData() 
		{
			$sql = "SELECT * FROM `tbl_accounts` ORDER BY `id` ASC";
			$stmt = DB::Create()->getPDO()->query($sql);
			return $stmt->fetchAll();
		}

		public function updateData() {
			throw new \Exception('Not supported yet.'); 
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


