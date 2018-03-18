<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
				
				
			//************************* My CART **************************	
			echo '<br><br><h2>My Cart</h2>';

				if($cartData) {
					$n = 0;
					foreach ($cartData as $cartKey => $cartValue) {
						# code...
						$cartData = json_decode($cartValue);
						$key_ = $cartData->key;
						$title = $cartData->title;
						$description = $cartData->description;
						$price = $cartData->price;

						//echo '<div>'.$key.'</div>';
						echo '<div class="cart-item-'.$key_.'">';
						echo '<div>'.$title.'</div>';
						echo '<div>'.$description.'</div>';
						echo '<div>'.$price.'</div>';
						echo '<div><button type="button" id="'.$key_.'" class="btn btn-danger btn-sm btnRemoveItem" style="cursor:pointer;">Remove Item</button></div><hr>';
						echo '</div>';
					}	
				} else {
					echo 'you don\'t have an items yet...';
				}


			echo '<br><strong>Cookie Array (Json format)</strong><br>to view the activity of a cookie, navigate: inspect element->storage->cookies->http:://something<br><br><pre>';
				var_export(Cookie::get());
			echo '</pre>';	
		?>

		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.btnRemoveItem').click(function() {
			
				var key_ = $(this).attr("id");
				//var item = $('.cart-item-'+key).text();
				//var itemSplit = item.split();
				//$('<div>'+item+'</div><hr>').insertAfter(".my-cart");

				var cart_number = parseInt($('.cart_number').html());			

				$.ajax({
					url: "cart_remove_item.php", 
					type: "POST",
					data: "cartItem=" + key_,
						beforeSend:function() {
								//console.log('beforeSend');	
								$('.a-loader').show();						
						}, 
						success: function() {
								$('.cart_number').text(cart_number - 1);
								$('.cart-item-'+key_).remove();
								//$('.btnAddToCart').html(' Item has been added ').attr('disabled','disabled')
								//console.log('success');
								console.log('deleted item: ' + key_);
								$('.a-loader').hide();
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





