<?php

//gives unique timestamp
echo time().'<br>';

//useful particularly for generating random num... 
echo microtime(true/*nonfloating*/).'<br>';

//current dateTime
echo date('d M Y').'<br>';

//July 21 days
//Semtember 30

//checkdate(month, day, year)
var_dump(checkdate(7, 31, 2016));



//list of timeZone
foreach (DateTimeZone::listIdentifiers() as $TimeZone) {
	echo $TimeZone.'<br>';
}


