<?php 

namespace app\model\accounts 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\accounts\AccountsModel;

	class AccountsLoginModel {

		private $_model;

		private $_session_id, 
				$_username, 
				$_password;

		public static function Create() : AccountsLoginModel {
			return new AccountsLoginModel;
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

		public function readData($uname, $pword, $sid) {
			$id = $this->_session_id = $sid;
			$username = $this->_username = $this->_model->setUsername($uname)->getUsername();
			$password = $this->_password = $this->_model->setPassword($pword)->getPassword();

			$sql = "SELECT `id` FROM `tbl_accounts` WHERE `username`=:username AND `password`=:password";
			$stmt = DB::Create()->getPDO()->prepare($sql);
			$stmt->bindValue(':username', $username, PDO::PARAM_STR);
			$stmt->bindValue(':password', $password, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt->rowCount() == null) {
				echo 'Incorrect Username Or Password';			
				return null;
			}  

			if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			    $session_id = $row['id'];
				Session::CreateSession($id, $session_id);
				return header('Location: reservation.php');
			}
		}

		public function updateData() {
			throw new \Exception('Not supported yet.'); 
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}
