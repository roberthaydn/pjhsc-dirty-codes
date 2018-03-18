<?php
	include('Account.php');
	/**
	*
	* Serves as the Sign In account.
	*
	* @version 0.1
	* @author Abriel I, Ronnel R.
	*/
	class SignInAccount implements Account{

		private $_id;
		private $_userName;
		private $_plainPassword;
		private $_encryptedPassword;

		function setID($id){$this->_id = $id; }
		function setUserName($userName){$this->_userName = $userName; }
		function setPlainPassword($plainPassword){$this->_plainPassword = $plainPassword; }
	 	function setEncryptedPassword($encryptedPassword){$this->_encryptedPassword = $encryptedPassword; }

		function getID(){return $this->_id; }
		function getUserName(){return $this->_userName; }
		function getPlainPassword(){return $this->_plainPassword; }
		function getEncryptedPassword(){return $this->_encryptedPassword; }

        function isNull(){
            return false;
        }
	}