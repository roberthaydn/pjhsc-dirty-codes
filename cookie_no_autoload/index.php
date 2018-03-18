<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
<body>
	
<?php 
//https://github.com/Josantonius/PHP-Cookie

require_once './josantonius/cookie/Cookie.php';
use josantonius\cookie\Cookie;

/*$key = 'item';
$value = 'pineapple - this will be expired after 1 day';
$time = '86400';

//Cookie::set($key, $value, $time);

$cookie_item = Cookie::get($key);

print_r($cookie_item);

Cookie::destroy($key);*/

//Cookie::destroy();

echo '<a href="cart.php">very simple cart</a>'; 

?>

</body>
</html>