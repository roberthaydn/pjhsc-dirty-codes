<?
class PostgreSQLManager
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

$PM = new PostgreSQLManager();
$PM->setHost("host");
$PM->setDB("db");
$PM->setUserName("user");
$PM->setPassword("pwd");
$PM->connect();

//now usage could be a bit difficult when you merge them together:
if ($dbtype=="mysql")
//use mysql class
else if ($dbtype=="postgresql")
//use postgresql class


?>
