<?php

namespace app\view\accounts 
{
	use app\model\accounts\AccountsChangePasswordModel;
	use app\lib\validation\factory\Input;

	class AccountsChangePasswordView {

		private $_model;

		private $_username, 
				$_password;

		public static function Create() : AccountsChangePasswordView {
			return new AccountsChangePasswordView;
		}

		private function __construct() {
			$this->_model = AccountsChangePasswordModel::Create();
		}
		private function __clone() {}

		public function changePassword() 
		{
			if(Input::IsIssetPost('changePassword'))
			{
		?>
			<style type="text/css">
				.top-response {
					display:block;
				}
			</style>
		<?php
					$currentPassword = Input::Post('currentPassword');
					$newPassword1 = Input::Post('newPassword1');
					$newPassword2 = Input::Post('newPassword2');
				
				if(md5($currentPassword) != $this->_model->readData()) 
					return '<span style="color:red;">Your current password is incorrect...</span>';
							

				if($newPassword1 != $newPassword2) 
					return '<span style="color:red;">Your new password did not match</span>';
				

				if(strlen($newPassword1) <= 3) 
					return '<span style="color:red">Your new password must be at least 4 characters...</span>';
				
				return $this->_model->updateData($newPassword1);		
			}
		}
	}
}



