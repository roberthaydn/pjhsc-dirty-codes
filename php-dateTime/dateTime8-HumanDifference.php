<?php

date_default_timezone_set('Europe/London');

function diffForHumans(DateTime $date) {
	//return $date;
	$currentDate = new DateTime;
	$difference = $currentDate->diff($date);

	$unit = 'second';
	$count = $difference->s;

	//var_dump($difference);
	switch (true) {
		case $difference->y > 0;
			$unit = 'year';
			$count = $difference->y;
			break;
		case $difference->m > 0;
			$unit = 'month';
			$count = $difference->m;
			break;	
		case $difference->h > 0;
			$unit = 'hour';
			$count = $difference->h;
			break;	
		case $difference->i > 0;
			$unit = 'minute';
			$count = $difference->i;
			break;	
	}

	if($count === 0) {
		$count = 1;
	}

	if($count !== 1) {
		$unit .= 's';
	}

	//invert -> 0 = Future
	//invert -> 1 = Past 
	$inversion = $difference->invert === 0 ? 'from now' : 'ago';

	return "{$count} {$unit} {$inversion}";
	//var_dump($difference);
}
					//y/m/d     /h/m/s
$date = new DateTime('2020-09-25 14:00:00');
//echo '<pre>'.var_export(diffForHumans($date), true).'</pre>';
echo diffForHumans($date);
