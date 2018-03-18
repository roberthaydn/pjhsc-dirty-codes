<?php 

require_once 'class.php';

echo Hello::Create()->hello('world');

echo '<h2>VIEWS</h2>';
echo '<h2>CONTACT PAGE</h2>';

if (isset($_GET['user'])) {
	echo $_GET['user'];
}
?>

<form action="contact" method="GET">
	<input type="text" name="user"/>
	<input type="submit" value="submit">
</form>


