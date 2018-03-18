<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="col-12">

		<?php 

		require_once 'autoload.php';
		use josantonius\cookie\Cookie;
		
		//************************* My CART **************************
		$cartData = Cookie::get();

			if($cartData) {
				$n = 0;
				foreach ($cartData as $key => $value) {
				$n = $n+1;
			}
				echo '<a href="mycart.php" class="btn btn-info btn-xs float-right">My Cart <strong>(<span class="cart_number">'.$n.'</span>)</strong></a><br><br>';	
			} else {
				$n=0;
				echo '<a href="mycart.php" class="btn btn-info btn-xs float-right">My Cart <strong>(<span class="cart_number">'.$n.'</span>)</strong></a><br><br>';
			}
		//************************* My CART **************************	

		$arrayCart = array('key1' => 
						array('title1', 
							  'description1', 
						      'price1'), 
					'key2' => 
						array('title2', 
							  'description2', 
						      'price2'),
					'key3' => 
						array('title3', 
							  'description3', 
						      'price3'));

	//************************* PRODUCTS **************************
	echo '<h2>Products</h2>';

	foreach ($arrayCart as $key => $value) {

		echo '<div id="cart-key-'.$key.'">';

			foreach ($value as $item) {
				echo '<div class="cart-item-'.$key.'">'.$item.' </div>';
			}
		echo '<a href="cart_view.php?key='.$key.'"><button type="button" class="btn btn-primary btn-sm" style="cursor:pointer;">View Item</button></a>';	

		echo '</div><br>';
	}
?>

	</div>	

</body>
</html>



