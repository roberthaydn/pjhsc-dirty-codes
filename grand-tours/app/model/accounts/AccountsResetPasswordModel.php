<?php 

namespace app\model\accounts 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\accounts\AccountsModel;

	class AccountsResetPasswordModel {

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

		public static function Create() : AccountsResetPasswordModel {
			return new AccountsResetPasswordModel;
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

		public function readData() {	
			throw new \Exception('Not supported yet.'); 
		}

		public function updateData($id) {
			/*return (function() use (&$id) {
				return $id.'hello world';
			})();*/

			if(!empty($id)) 
			{
			?>
			<style type="text/css">
				.top-response {
					display:block;
				}
			</style>
			<?php
				$sql = "UPDATE `tbl_accounts` SET `password`=:password WHERE `id`=:id";
				$stmt = DB::Create()->getPDO()->prepare($sql);	
				$hashPassword = md5('password');
				$stmt->bindParam(':id', $id);
				$stmt->bindParam(':password', $hashPassword);
				$stmt->execute();

				return '<span style="color:green;"><strong>Password has been changed!</strong></a>';
			}
			/*echo '<pre>';
			print_r($stmt->errorInfo());
			echo '</pre>';*/
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


