<?php 
    /**
  	* @version: 0.2
  	* @author: Abriel, Ronnel
  	*/
	class Connection {

        private static $_IP = 'localhost';
        private static $_ROOT = 'root';
        private static $_PASSWORD = '';
        private static $_DB = 'group_1';   

        private static function getConnection() {
            try {
                return new PDO(self::getConnectionString(), self::getUser(), self::getPassword());
            } catch(PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
        }
        private function __construct(){}
        public static function Connect() {return self::getConnection(); }
        private static function getConnectionString(){return 'mysql:host='.self::getIP().'; dbname='.self::getDB(); }
        private static function getIP(){return self::$_IP; }
        private static function getDB(){return self::$_DB; }
        private static function getUser(){return self::$_ROOT; }
        private static function getPassword(){return self::$_PASSWORD; }
    }