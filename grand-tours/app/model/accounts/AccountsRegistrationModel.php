<?php 

namespace app\model\accounts 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\accounts\AccountsModel;

	class AccountsRegistrationModel {

		private $_model;

		private $_id, 
				$_username, 
				$_password,
				$_firstname,
				$_lastname,
				$_gender,
				$_email,
				$_mobile_no,
				$_address;

		public static function Create() : AccountsRegistrationModel {
			return new AccountsRegistrationModel;
		}

		private function __construct() {
			$this->_model = AccountsModel::Create();
		}
		private function __clone() {}

		/**
		* Create, Read(retrieve), Update, Delete
		*/
		public function createData($dataArr) {
			$sql = "INSERT INTO `tbl_accounts` SET 
 					 `id`=:id,
 					 `username`=:username, 
 					 `firstname`=:firstname,
 					 `lastname`=:lastname,
 					 `password`=:password,
 					 `gender`=:gender,
 					 `email`=:email,
 					 `mobile_no`=:mobile_no,
 					 `address`=:address";

 			$stmt = DB::Create()->getPDO()->prepare($sql);		 	

 			$this->_id 			=	$this->_model->setID('0')->getID();
			$this->_username 	= 	$this->_model->setUsername($dataArr[0])->getUsername();
			$this->_firstname 	= 	strtolower($this->_model->setFirstname($dataArr[1])->getFirstname());
			$this->_lastname 	= 	strtolower($this->_model->setLastname($dataArr[2])->getLastname());
			$this->_password 	= 	md5($this->_model->setPassword('password')->getPassword());
			$this->_gender 		= 	strtolower($this->_model->setGender($dataArr[3])->getGender());
			$this->_email 		= 	$this->_model->setEmail($dataArr[4])->getEmail();
			$this->_mobile_no 	= 	$this->_model->setMobileNo($dataArr[5])->getMobileNo();
			$this->_address 	= 	strtolower($this->_model->setAddress($dataArr[6])->getAddress());

			//if($this->_gender == )

			$stmt->bindParam(':id', $this->_id);
			$stmt->bindParam(':username', $this->_username); 
			$stmt->bindParam(':firstname', $this->_firstname);
			$stmt->bindParam(':lastname', $this->_lastname); 
			$stmt->bindParam(':password', $this->_password);
			$stmt->bindParam(':gender', $this->_gender);
			$stmt->bindParam(':email', $this->_email); 
			$stmt->bindParam(':mobile_no', $this->_mobile_no); 
			$stmt->bindParam(':address', $this->_address);
			$stmt->execute();

			return '<span style="color:green;"><strong>Username: '.ucwords(strtolower($this->_username)).' is successfully registered...<strong></span>';	
			/*
			echo '<pre>';
			print_r($stmt->errorInfo());
			echo '</pre>';
			*/
		}

		//retrieving data from tbl-accounts
		public function readData($uname) {
			//check if username is existing..
			$sql = "SELECT `id` FROM `tbl_accounts` WHERE `username`=:username";
			$stmt = DB::Create()->getPDO()->prepare($sql);
			$stmt->bindValue(':username', $uname, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt->rowCount() == null) {
				return false;
			}
			return true;
		}

		public function updateData() {
			throw new \Exception('Not supported yet.'); 
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


