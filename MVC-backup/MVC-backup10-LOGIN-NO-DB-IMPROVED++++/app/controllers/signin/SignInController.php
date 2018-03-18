<?php
    /**
    *
    * Serves as the Sign In controller.
    *
    * @version 0.1
    * @author Abriel I, Ronnel R.
    */
	class SignInController{

    	private $_view;
    	private $_account;
        private $_database;

    	function requestSignIn($account){
            $this->_database = new AccountDatabase();
            $this->setSigInAccount($account);
    	}
    	function requestedSignIn() {
            $database_username = 
                $this->_database->get($this->_account)->getUserName();
            $database_password =
                $this->_database->get($this->_account)->getPlainPassword();
            $account_username = $this->_account->getUserName();
            $account_password = $this->_account->getPlainPassword();
            if($database_username == $account_username){
                if($database_password == $account_password){
                    /*cannot send to cookie in test.*/
                    $this->createSession($this->getSignInAccount());
                    $this->redirectIndex();
                    return;
                }
            }
    		$this->displayErrorMessage();
    	}
    	function setView($view){$this->_view = $view; }
    	function setModel($model){throw new \Exception('Not supported yet.');}
    	private function getView(){return $this->_view; }
    	private function displayErrorMessage(){$this->_view->getEncodedDisplayErrorMessage(); }
    	private function redirectIndex(){$this->_view->getEncodedIndex(); }
        private function setSigInAccount($account){
            if($account == null){throw new \Exception('Account is null.'); }
            $this->_account = $account;
        }
        private function getSignInAccount(){return $this->_account; }
        private function createSession($account){
            Session::sessionStart();
            Session::create('user', $account->getID());
        }
    }	