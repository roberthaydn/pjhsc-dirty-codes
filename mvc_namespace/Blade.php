<?php
	
	require_once 'autoload.php';	

	use controller\Controller;

	use controller\controller1\Controller1;
	use controller\controller2\Controller2;

	use controller\controller1\Same as Same1;
	use controller\controller2\Same as Same2;

	$c = new Controller();
	$c1 = new Controller1();
	$c2 = new Controller2();
	$s1 = new Same1();
	$s2 = new Same2();


	print_r($c); echo '<br />';
	print_r($c1); echo '<br />';
	print_r($c2); echo '<br />';
	print_r($s1); echo '<br />';
	print_r($s2);

	echo Controller1::Create()->controller();
?>