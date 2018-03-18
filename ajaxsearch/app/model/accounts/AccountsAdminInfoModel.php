<?php 

namespace app\model\accounts 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\accounts\AccountsAdminModel;

	class AccountsAdminInfoModel {

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

		public static function Create() : AccountsAdminInfoModel {
			return new AccountsAdminInfoModel;
		}

		private function __construct() {
			$this->_model = AccountsAdminModel::Create();
		}
		private function __clone() {}

		/**
		* Create, Read(retrieve), Update, Delete
		*/
		public function createData() {
			throw new \Exception('Not supported yet.'); 
		}

		//retrieving data from tbl-accounts
		public function readData($data) {
			//sql statement
			return (function() use (&$data) {
				$id = $this->_session_id = Session::GetSession('session_admin');
				$sql = "SELECT {$data} FROM `tbl_admin_accounts` WHERE `id`=:id";
				$stmt = DB::Create()->getPDO()->prepare($sql);
				$stmt->bindValue(':id', $id, PDO::PARAM_INT);
				$stmt->execute();
				$row = $stmt->fetch();

				//fetching data 
				return (function() use (&$data, &$row) : string {
					if($data==='username') 
						return $this->_username = $this->_model->setUsername($row[$data])->getUsername();
					 
					if ($data==='firstname') 
						return $this->_firstname = ucwords(strtolower($this->_model->setFirstname($row[$data])->getFirstname()));

					if ($data==='lastname') 
						return $this->_lastname = ucwords(strtolower($this->_model->setLastname($row[$data])->getLastname()));

					if ($data==='gender') 
						return $this->_gender = ucwords(strtolower($this->_model->setGender($row[$data])->getGender()));

					if ($data==='email') 
						return $this->_email = $this->_model->setEmail($row[$data])->getEmail();

					if ($data==='mobile_no') 
						return $this->_mobile_no = $this->_model->setMobileNo('0'.$row[$data])->getMobileNo();

					if ($data==='address') 
						return $this->_address = ucwords(strtolower($this->_model->setAddress($row[$data])->getAddress()));
				})();	
			})();
		}

		public function updateData() {
			throw new \Exception('Not supported yet.'); 
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


