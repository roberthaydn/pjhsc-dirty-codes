<?php
 
namespace app\model\accounts 
{
	class AccountsAdminModel {

		private $_id, 
				$_username, 
				$_password,
				$_firstname,
				$_lastname,
				$_gender,
				$_email,
				$_mobile_no,
				$_address;

		public static function Create() : AccountsAdminModel {
			return new AccountsAdminModel;
		}

		private function __construct() {}
		private function __clone() {}
		
		/**
		* Create getter and setter for the model data
		*/
		public function getID() : int {return $this->_id;}
		public function getUsername() : string {return $this->_username; }
		public function getPassword() : string {return $this->_password; }
		public function getFirstname() : string {return $this->_firstname; }
		public function getLastname() : string {return $this->_lastname; }
		public function getGender() : string {return $this->_gender; }
		public function getEmail() : string {return $this->_email; }
		public function getMobileNo() : string {return $this->_mobile_no; }
		public function getAddress() : string {return $this->_address; }

		public function setID($id) {$this->_id = $id; return $this;}
		public function setUsername($username) {$this->_username = $username; return $this;}
		public function setPassword($password) {$this->_password = $password; return $this;}
		public function setFirstname($firstname) {$this->_firstname = $firstname; return $this;}
		public function setLastname($lastname) {$this->_lastname = $lastname; return $this;}
		public function setGender($gender) {$this->_gender = $gender; return $this;}
		public function setEmail($email) {$this->_email = $email; return $this;}
		public function setMobileNo($mobileNo) {$this->_mobile_no = $mobileNo; return $this;}
		public function setAddress($address) {$this->_address = $address; return $this;}
	}
}


