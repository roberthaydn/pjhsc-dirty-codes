<?php
// Create the new iterator:
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('/var/www/oop/book1/chapter6' ));

foreach( $it as $key => $file )
{
	echo $key."=>".$file."<br>";
}
?>
