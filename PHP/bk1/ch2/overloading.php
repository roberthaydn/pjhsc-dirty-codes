<?
class Overloader
	{
	function __call($method, $arguments)
	{
		echo "You called a method named {$method} with the following
		arguments <br/><pre>";
		print_r($arguments).'';
		echo "</pre><br/>";
	}
}

$arrayName = array('0' => 
					array('0' => "hello"), '1' => "world"
				  );

$ol = new Overloader();
$ol->access($arrayName,3,4);
$ol->notAnyMethod("boo");
?>
