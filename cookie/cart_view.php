

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>	
</head>
<body>

	<div class="container">
		<div class="col-12">	
			<div class="a-loader-wrapper">
				<div class="a-loader">
					<img src="34.gif" width="32" height="32"></div>
				</div>
			</div>
	
		<?php 

			require_once 'autoload.php';
			use josantonius\cookie\Cookie;	

			//************************* My CART **************************
			echo '<a href="cart.php" class="btn btn-info btn-xs float-left">< Cart</a>';

			$cartData = Cookie::get();
	
			if($cartData) {
				$n = 0;
				foreach ($cartData as $key => $value) {
					$n = $n+1;
				}
				echo '<a href="mycart.php" class="btn btn-info btn-xs float-right">My Cart <strong>(<span class="cart_number">'.$n.'</span>)</strong></a>';	
			} else {
				$n=0;
				echo '<a href="mycart.php" class="btn btn-info btn-xs float-right">My Cart <strong>(<span class="cart_number">'.$n.'</span>)</strong></a>';
			}
	
			//************************* Cart View **************************	
			echo '<br><br><h2>Item Selected</h2>';

			@$key = $_GET['key'];

			if($key == 'key1') {
				if($cartData) {
					$key_bool;
					foreach ($cartData as $cartKey => $cartValue) {
						# code...
						$cartData = json_decode($cartValue);
						$json_key = $cartData->key;

						if($json_key == $key) {
							$json_key_value = $json_key;
							if($json_key_value == $key) {
								$key_bool = true;
								//echo $key_bool;
							} else {
								$key_bool = false;
								//echo $key_bool;
							}		
						}		
					}
				}
					echo '<div class="xxx">title1</div>';
					echo '<div class="xxx">description1</div>';
					echo '<div class="xxx">price1</div>';
								
					if(@$key_bool) {
						echo '<button type="button" class="btn btn-success btn-sm" disabled>Item is already added!</button';
					} else {	
						echo '<input type="hidden" id="cartAdd" name="cartAdd" value="cartAdd">';
						echo '<input type="hidden" id="cartKey" name="cartKey" value="'.$key.'">';	
						echo '<button type="button" class="btn btn-success btn-sm btnAddToCart" style="cursor:pointer;">Add to Cart</button';
					}	
			}

			if($key == 'key2') {
				if($cartData) {
					$key_bool;
					foreach ($cartData as $cartKey => $cartValue) {
						# code...
						$cartData = json_decode($cartValue);
						$json_key = $cartData->key;

						if($json_key == $key) {
							$json_key_value = $json_key;
							if($json_key_value == $key) {
								$key_bool = true;
								//echo $key_bool;
							} else {
								$key_bool = false;
								//echo $key_bool;
							}		
						}
					}
				}

				echo '<div class="xxx">title2</div>';
				echo '<div class="xxx">description2</div>';
				echo '<div class="xxx">price2</div>';				
				
				if(@$key_bool) {
					echo '<button type="button" class="btn btn-success btn-sm" disabled>Item is already added!</button';
				} else {	
					echo '<input type="hidden" id="cartAdd" name="cartAdd" value="cartAdd">';
					echo '<input type="hidden" id="cartKey" name="cartKey" value="'.$key.'">';	
					echo '<button type="button" class="btn btn-success btn-sm btnAddToCart" style="cursor:pointer;">Add to Cart</button';
				}
			}

			if($key == 'key3') {
				if($cartData) {
					$key_bool;
					foreach ($cartData as $cartKey => $cartValue) {
						# code...
						$cartData = json_decode($cartValue);
						$json_key = $cartData->key;

						if($json_key == $key) {
							$json_key_value = $json_key;
							if($json_key_value == $key) {
								$key_bool = true;
								//echo $key_bool;
							} else {
								$key_bool = false;
								//echo $key_bool;
							}		
						}
					}
				}

				echo '<div class="xxx">title3</div>';
				echo '<div class="xxx">description3</div>';
				echo '<div class="xxx">price3</div>';
				

				if(@$key_bool) {
					echo '<button type="button" class="btn btn-success btn-sm" disabled>Item is already added!</button';
				} else {
					echo '<input type="hidden" id="cartAdd" name="cartAdd" value="cartAdd">';	
					echo '<input type="hidden" id="cartKey" name="cartKey" value="'.$key.'">';	
					echo '<button type="button" class="btn btn-success btn-sm btnAddToCart" style="cursor:pointer;">Add to Cart</button';
				}
			}

		?>

		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.btnAddToCart').click(function() {
			
				//var key = $(this).attr("id");
				//var item = $('.cart-item-'+key).text();
				//var itemSplit = item.split();
				//$('<div>'+item+'</div><hr>').insertAfter(".my-cart");

				var cart_number = parseInt($('.cart_number').html());			

				$.ajax({
					url: "cart_process.php", 
					type: "POST",
					data: $('#cartKey, #cartAdd').serialize(),
						beforeSend:function() {
								//console.log('beforeSend');
								$('.a-loader').show();							
						}, 
						success: function() {
								$('.cart_number').text(cart_number + 1);
								$('.btnAddToCart').html(' Item has been added ').attr('disabled','disabled');
								$('.a-loader').hide();
								//console.log('success');
						},
						complete: function(data) {	
								//console.log('complete');					
						},
						error:function(){
								//console.log("error");
						}    
				})
			});
		});
	</script>

</body>
</html>





