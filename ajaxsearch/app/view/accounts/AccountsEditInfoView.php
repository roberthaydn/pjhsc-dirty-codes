<?php

namespace app\view\accounts 
{
	use app\model\accounts\AccountsEditInfoModel;
	use app\lib\validation\factory\Input;

	class AccountsEditInfoView {

		private $_model;

		private $_session_id = 'session_accounts', 
				$_username, 
				$_password;

		public static function Create() : AccountsEditInfoView {
			return new AccountsEditInfoView;
		}

		private function __construct() {
			$this->_model = AccountsEditInfoModel::Create();
		}
		private function __clone() {}

		public function data() 
		{
			if(Input::IsIssetPost('editInfo')) 
			{
		?>
			<style type="text/css">
				.top-response {
					display:block;
				}
			</style>
		<?php

				$fname = (!Input::Post('firstname')=='') ? Input::Post('firstname') : 'empty';
				$lname = (!Input::Post('lastname')=='') ? Input::Post('lastname') : 'empty';
				$gender = (Input::IsIssetPost('gender')) ? Input::Post('gender') : 'empty';
				$email = (!Input::Post('email')=='') ? Input::Post('email') : 'empty';
				$mobile_no = (!Input::Post('mobile_no')=='') ? Input::Post('mobile_no') : '0';
				$address = (!Input::Post('address')=='') ? Input::Post('address') : 'empty';

				$dataArr = array($fname, $lname, $gender, $email, $mobile_no, $address);

				return $this->_model->updateData($dataArr);
			}
		}
	}
}



