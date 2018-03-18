<?php
	include_once('Connection.php');
	
	$connect = finalConnection::create();
	var_export($connect);

	$hello = array(
			'aa' => '11aa',
			'bb' => '11bb'
		);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<select name="hello">
	<?php foreach ($hello as $key => $value) : ?>	
			<option><?= $key.' '.$value; ?></option>	
	<?php endforeach; ?>
</select>	

</body>
</html>