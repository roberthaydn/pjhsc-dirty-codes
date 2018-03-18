
<?php


$item = array(
		'Daspan|Description|170|3',
		'Silhig|Description|470|7',
		'Elmer\'s Glue|Description|670|8',
	);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="process.php" method="GET">
		<?php 
			foreach ($item as $itm => $s) :
				//echo $s.'<hr>';
				$ex = explode('|', $s);
				//print_r($ex);
				echo ' '.$ex[0].' | '.$ex[1].' | '.$ex[2].' | '.$ex[3].' ';
				echo '<hr>';
			endforeach; 

			echo '<a href="process.php?item='.$ex[0].'&q='.$ex[3].'"> 
				<input type="button" value=" Submit "></a><hr>';
		?>

	</form>
</body>
</html>