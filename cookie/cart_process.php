<?php 

//Json link
//https://www.taniarascia.com/how-to-use-json-data-with-php-or-javascript/

require_once 'autoload.php';

use josantonius\cookie\Cookie;

@$key = $_POST['cartKey'];
@$cartAdd = $_POST['cartAdd'];
@$cartRemove = $_POST['cartRemove'];

if(isset($cartAdd)) {

	if($key == 'key1') {
		$cart_key = $key;
		$cart_title = 'title1';
		$cart_description = 'description1';
		$cart_price = 'price1';
	}

	if($key == 'key2') {
		$cart_key = $key;
		$cart_title = 'title2';
		$cart_description = 'description2';
		$cart_price = 'price2';
	}

	if($key == 'key3') {
		$cart_key = $key;
		$cart_title = 'title3';
		$cart_description = 'description3';
		$cart_price = 'price3';
	}

	$cookie_cart_key = $key;
	$cookie_cart_key_data = '{
			"key": "'.$key.'",
			"title": "'.$cart_title.'",
			"description": "'.$cart_description.'",
			"price": "'.$cart_price.'"
	}';

		$cookie_cart_time = '1800';

		Cookie::set($cookie_cart_key, $cookie_cart_key_data, $cookie_cart_time);
}

