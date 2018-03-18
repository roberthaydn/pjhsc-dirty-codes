<?php

namespace app\view\accounts 
{
	use app\model\accounts\AccountsRegistrationModel;
	use app\lib\validation\factory\Input;
	use app\lib\validation\factory\Required;

	class AccountsRegistrationView {

		private $_model;

		private $_username, 
				$_password;

		public static function Create() : AccountsRegistrationView {
			return new AccountsRegistrationView;
		}

		private function __construct() {
			$this->_model = AccountsRegistrationModel::Create();
		}
		private function __clone() {}

		public function register() {

			if(Input::IsIssetPost('register')) 
			{
		?>
			<style type="text/css">
				.top-response {
					display:block;
				}
			</style>
		<?php
				$uname = Input::Post('username');
				$fname = (!Input::Post('firstname')=='') ? Input::Post('firstname') : 'empty';
				$lname = (!Input::Post('lastname')=='') ? Input::Post('lastname') : 'empty';
				$gender = (Input::IsIssetPost('gender')) ? Input::Post('gender') : 'empty';
				$email = (!Input::Post('email')=='') ? Input::Post('email') : 'empty';
				$mobile_no = (!Input::Post('mobile_no')=='') ? Input::Post('mobile_no') : '0';
				$address = (!Input::Post('address')=='') ? Input::Post('address') : 'empty';

				$dataArr = array($uname, $fname, $lname, $gender, $email, $mobile_no, $address);
					
				$userFieldRequired = Required::setRequired($uname, true);	

				if(!$userFieldRequired->isPassed()) {
					return '<span style="color:red;">Username field is required...</span>';
				}

				if(strlen($uname) <= 3) {
					return '<span style="color:red;">required at least 4 characters...</span>';
				}
				
				if($this->_model->readData($uname) == 1) 
				{
				 	return '<span style="color:red;">Username: '.$uname.' is already registered...</span>';
				} 

				return $this->_model->createData($dataArr);
				
			}
		}

		/*public function validate() {
			if(Input::IsIssetPost('checkUsername')) {
				
				$uname = Input::Post('username');
				$userFieldRequired = Required::setRequired($uname, true); 

				if(!$userFieldRequired->isPassed()) {
					return 'this field is required*';
				}

				if(strlen($uname) <= 3) {
					return 'required at least 4 characters';
				}
				
				return $this->_model->readData($uname);

			} else {
				return 'this field is required*';
			}
		}*/
	}
}



