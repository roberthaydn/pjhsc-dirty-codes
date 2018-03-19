<?php

	$DI = new DirectoryIterator("/var/www/oop/book1/chapter6");
	$directories = array();
	$files = array();

	foreach ($DI as $file) {
		$filename = $file->getFilename();
		if ($file->isDir()){
			if(strpos($filename,".")===false)
			$directories[] = $filename;
		} else {
			$files[] = $filename;	
		}		
	}

	echo "Directories\n";
	echo "<pre>";
	print_r($directories);
	echo "</pre>";

	/*
	foreach ($directories as $key => $value) {
		echo $value;
	}
	*/
	
	echo "\nFiles\n";
	echo "<pre>";
	print_r($files);
	echo "</pre>";
?>
