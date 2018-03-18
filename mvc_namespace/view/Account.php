<?php 

namespace account
{
	class Account 
	{
		public static function Create() {
			return new Account;
		}

		public function account() {
			return "Account!";
		}
	}
}



?>