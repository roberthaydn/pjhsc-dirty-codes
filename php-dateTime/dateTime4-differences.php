<?php

$date = new DateTime;
$myBirthday = (new DateTime)->setDate(1992, 4, 11)->setTime(10, 00, 00);

$timeUntilBirthday = $date->diff($myBirthday);

echo '<pre>'.var_export($timeUntilBirthday, true).'</pre>';
					// $timeUntilBirthday->d



echo $timeUntilBirthday->format('%m months %d days %h hours');