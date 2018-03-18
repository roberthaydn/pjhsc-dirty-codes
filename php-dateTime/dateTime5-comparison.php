<?php

/*
$date = new DateTime('2016-12-25 12:00:00');
$date2 = new DateTime('2016-12-01');

if($date > $date2) {
	echo 'yes';
}
*/

$date = new DateTime('2016-12-25 12:00:00');

if((int) $date->format('Y') < 2017) {
	echo 'Yes.';
}



