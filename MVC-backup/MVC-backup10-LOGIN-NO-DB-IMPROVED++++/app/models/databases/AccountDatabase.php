<?php
    /**
    *
    * Serves as the central database for all the accounts.
    *
    * @version 0.1
    * @author Abriel I, Ronnel R.
    */
	class AccountDatabase implements Database{
        private $_pdo;
        private $_account;            

        function __construct(){
            $this->_pdo = Connection::Connect(); 
        }
        function add(){
            throw new \Exception('Not supported yet.');
        }
        function delete(){
            throw new \Exception('Not supported yet.');
        }
        function update(){
            throw new \Exception('Not supported yet.');
        }
        function get($obj){
            $query = "SELECT * FROM `account` WHERE `username` = :username;";
            $stmnt = $this->_pdo->prepare($query);
            $stmnt->bindValue(':username', $obj->getUserName());
            $stmnt->execute();
            $account = null;

            if($stmnt->rowCount() == 0){
                $account = new NullSignInAccount();
            }else{
                $row = $stmnt->fetch(PDO::FETCH_ASSOC);
                $account = new SignInAccount();
                $account->setID((integer)$row['id']);
                $account->setUserName($row['username']);
                $account->setPlainPassword($row['password']);
                $account->setEncryptedPassword($row['password']);
            }
            return $account;
        }
        function setAccount($account){
            if($account == null){
                throw new \Exception('AccountDatabase:setAccount -> Account is null.');
            }
            if(!($account instanceof Account)){
                throw new \Exception('AccountDatabase:setAccount -> Invalid parameter, not an account.');
            }
            $this->_account = $account;
        }
        private function getAccount(){
            return $this->_account;
        }
    }