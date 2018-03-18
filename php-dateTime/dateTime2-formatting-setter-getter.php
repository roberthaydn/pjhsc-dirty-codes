<?php

$date = new DateTime();

//echo $date->format('dS M Y');

//echo $date->getTimeStamp();

//var_dump($date->getTimezone());

//echo $date->getTimezone()->getName();

//2016-9-23

/*
$dateString = '2016-9-23';
$date = DateTime::createFromFormat('Y-m-d', $dateString);
//var_dump($date);
echo $date->format('dS M Y');
*/

//year, month, day
$date->setDate(2016, 9, 23);

// hour, min, secs
$date->setTime(12,30,30);

echo '<pre>'.var_export($date, true).'</pre>';