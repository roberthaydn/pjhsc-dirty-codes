<?php
class users implements ArrayAccess
{
	private $users;
	
	public function __construct()
	{
		$this->users = array();
	}
	public function offsetExists($key)
	{
		return isset($this->users[$key]);
	}
	public function offsetGet($key)
	{
		return $this->users[$key];
	}
	public function offsetSet($key, $value)
	{
		$this->users[$key] = $value;
	}
	public function offsetUnset($key)
	{
		unset($this->users[$key]);
	}
}

$users = new users();
$users['afif']="mayflower@phpxperts.net";
$users['hasin']="hasin@pageflakes.com";
$users['ayesha']="florence@phpxperts.net";
echo $users['afif'];

?>
