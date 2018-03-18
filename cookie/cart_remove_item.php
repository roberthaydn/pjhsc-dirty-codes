<?php

require_once 'autoload.php';
use josantonius\cookie\Cookie;	

//if(isset($_POST['cartItem'])) {
	//Cookie::destroy($cartItem);

	@$cartItem = $_POST['cartItem'];
	
	//$cartData = Cookie::get();

	Cookie::destroy($cartItem);

	/*if($cartData) {
		foreach ($cartData as $cartKey => $cartValue) {
			# code...
			$cartData = json_decode($cartValue);
			$key_ = $cartData->key;

			if($key_ == $cartItem) 
			{
				Cookie::destroy($key_);
				echo '<div>'.$key_.'</div>';
			}
		}	
	}*/

//}




