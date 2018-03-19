<?php

class CustomFO extends SplFileObject
{

private $i=1;

public function current()
	{
	return $this->i++.": 
		".htmlspecialchars($this->getCurrentLine())."";
	}
}

$SFI= new SplFileInfo( "/var/www/oop/bk1/ch1/mailer.php" );
$SFI->setFileClass( "CustomFO" );
$file = $SFI->openFile( );

echo "<pre>";

foreach( $file as $line )
{
	echo $line;
}
?>
