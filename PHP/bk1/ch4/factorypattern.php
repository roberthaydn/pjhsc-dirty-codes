<?
class MySQLManager
{
	public function setHost($host)
	{
	//set db host
	}
	public function setDB($db)
	{
	//set db name
	}
	public function setUserName($user)
	{
	//set user name
	}
	public function setPassword($pwd)
	{
	//set password
	}
	public function connect()
	{
	//now connect
	}
}

//now you use this class like this:
$MM = new MySQLManager();
$MM->setHost("host");
$MM->setDB("db");
$MM->setUserName("user");
$MM->setPassword("pwd");
$MM->connect();

?>

