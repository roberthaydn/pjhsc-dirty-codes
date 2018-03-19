<?php
class ArrayToObject extends ArrayObject
{
	public function __get($key)
	{
	return $this[$key];
	}
	public function __set($key,$val)
	{
		$this[$key] = $val;
	}
}

$users = new ArrayToObject(array("hasin"=>"hasin@pageflakes.com",
"afif"=>"mayflower@phpxperts.net",
"ayesha"=>"florence@pageflakes.net"));

foreach ($users as $key => $value) {
	echo ' '.$value.'<br>';
	//if($key=="afif") break; 
}

//echo $users->ayesha;

?>

