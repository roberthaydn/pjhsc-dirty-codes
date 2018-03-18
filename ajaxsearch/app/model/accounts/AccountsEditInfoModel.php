<?php 

namespace app\model\accounts 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\accounts\AccountsModel;

	class AccountsEditInfoModel {

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

		public static function Create() : AccountsEditInfoModel {
			return new AccountsEditInfoModel;
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

		public function readData($dataArr) {
			//throw new \Exception('Not supported yet.'); 
			//return $dataArr[0].' <br>'.$dataArr[1].' <br>'.$dataArr[2].' <br>'.$dataArr[3].' <br>'.$dataArr[4].' <br>'.$dataArr[5];
			throw new \Exception('Not supported yet.'); 
		}

		public function updateData($dataArr) 
		{
			
			//throw new \Exception('Not supported yet.'); 
			$sql = "UPDATE `tbl_accounts` SET 

			`firstname`=:firstname,
			`lastname`=:lastname,
			`gender`=:gender,
			`email`=:email,
			`mobile_no`=:mobile_no,
			`address`=:address 

			WHERE `id`=:id";

			$stmt = DB::Create()->getPDO()->prepare($sql);

			$id = $this->getSessionID();
			$this->_firstname 	= 	strtolower($this->_model->setFirstname($dataArr[0])->getFirstname());
			$this->_lastname 	= 	strtolower($this->_model->setLastname($dataArr[1])->getLastname());
			$this->_gender 		= 	strtolower($this->_model->setGender($dataArr[2])->getGender());
			$this->_email 		= 	$this->_model->setEmail($dataArr[3])->getEmail();
			$this->_mobile_no 	= 	$this->_model->setMobileNo($dataArr[4])->getMobileNo();
			$this->_address 	= 	strtolower($this->_model->setAddress($dataArr[5])->getAddress()); 

			(trim($this->_firstname) == trim(' ')) ? $this->_firstname = 'noname' : null;
			(trim($this->_lastname) == trim(' ')) ? $this->_lastname = 'noname' : null;

			$stmt->bindParam(':id', $id);
			$stmt->bindParam(':firstname', $this->_firstname);
			$stmt->bindParam(':lastname', $this->_lastname);
			$stmt->bindParam(':gender', $this->_gender);
			$stmt->bindParam(':email', $this->_email);
			$stmt->bindParam(':mobile_no', $this->_mobile_no);
			$stmt->bindParam(':address', $this->_address);
			$stmt->execute();


			return '<span style="color:green"><strong>Your information has been changed!</strong></span>';
			//header('location: accounteditinfo.php');
			/*echo '<pre>';
			print_r($stmt->errorInfo());
			echo '</pre>';*/
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


