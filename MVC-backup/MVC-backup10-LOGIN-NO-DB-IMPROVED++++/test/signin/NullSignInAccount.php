<?php
    /**
    *
    * Serves as the Null Sign In account.
    *
    * @version 0.1
    * @author Abriel I, Ronnel R.
    */
	 class NullSignInAccount implements Account{

        private $_id = 0;
        private $_userName = 'Username is not available.';
        private $_plainPassword = 'Plain password is not available.';
        private $_encryptedPassword = 'Encrypted password is not available.';

        function setID($id){throw new \Exception('Not supported yet.');}
        function setUserName($userName){throw new \Exception('Not supported yet.');}
        function setPlainPassword($plainPassword){throw new \Exception('Not supported yet.');}
        function setEncryptedPassword($encryptedPassword){throw new \Exception('Not supported yet.');}

        function getID(){return $this->_id; }
        function getUserName(){return $this->_userName; }
        function getPlainPassword(){return $this->_plainPassword; }
        function getEncryptedPassword(){return $this->_encryptedPassword; }

        function isNull(){
            return true;
        }
    }