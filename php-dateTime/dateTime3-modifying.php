<?php

$date = new DateTime;

//modified date (ADDING)
// P= PERIOD
// 10D = 10 days
// TIME
// 2H = 2 hours
$date->add(new DateInterval('P1DT2H'));


//modified date (SUBTRACTING)
//$date->sub(new DateInterval('P1DT2H'));

echo '<pre>'.var_export($date, true).'</pre>';

//or
//$date = new DateTime('+2 days 5 hours');



$date = new DateTime();

$newDate = clone $date;
$newDate = $newDate->modify('+2 days');

echo '<pre>'.var_export($newDate, true).'</pre>';


