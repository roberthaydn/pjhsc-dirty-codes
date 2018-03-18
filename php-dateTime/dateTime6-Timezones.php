<?php

//$date->setTimezone(new DateTimeZone('Europe/London'));
//$date = new DateTime('now', new DateTimeZone('Europe/London'));
//echo '<pre>'.var_export($date, true).'</pre>';

$timezone = 'Asia/Manila';
date_default_timezone_set($timezone);

$date = new DateTime;
echo '<span style="color:green;font-size:36px;">'.$date->format('M d D Y - h : i : s').'</span>';

echo '<pre>'.var_export(DateTimeZone::listIdentifiers(), true).'</pre>';


