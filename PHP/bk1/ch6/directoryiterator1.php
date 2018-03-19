<?php

	$DI = new DirectoryIterator("/var/www/oop/book1/chapter6");
		foreach ($DI as $file) {
			echo $file."<br>";
		}

?>
