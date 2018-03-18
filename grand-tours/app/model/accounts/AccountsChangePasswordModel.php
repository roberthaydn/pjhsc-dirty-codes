<?php 

namespace app\model\accounts 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\accounts\AccountsModel;

	class AccountsChangePasswordModel {

		private $_model;

		private $_session_id;

		public static function Create() : AccountsChangePasswordModel {
			return new AccountsChangePasswordModel;
		}

		private function __construct() {
			$this->_model = AccountsModel::Create();
		}
		private function __clone() {}

		public function getSessionID() {
			return $this->_session_id = Session::GetSession('session_accounts');
		}

		/**
		* Create, Read(retrieve), Update, Delete
		*/
		public function createData() {
			throw new \Exception('Not supported yet.'); 
		}

		public function readData() {
			$id = $this->getSessionID();
			$sql = "SELECT `password` FROM `tbl_accounts` WHERE `id`=:id";
			$stmt = DB::Create()->getPDO()->prepare($sql);
			$stmt->bindValue(':id', $id, PDO::PARAM_STR);
			$stmt->execute();
			$row = $stmt->fetch();	

			return $this->_model->setPassword($row['password'])->getPassword();
		}

		public function updateData($newPassword) {	
			$id = $this->getSessionID();
			$sql = "UPDATE `tbl_accounts` SET `password`=:password WHERE `id`=:id";
			$stmt = DB::Create()->getPDO()->prepare($sql);	
			$hashPassword = md5($newPassword);
			$stmt->bindParam(':id', $id);
			$stmt->bindParam(':password', $hashPassword);
			$stmt->execute();

			return '<span style="color:green;"><strong>Your password has been changed!</strong></a>';
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


