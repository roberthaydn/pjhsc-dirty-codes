<?php

$start = new DateTime();

//$start->setTime($start->format('H'), 30, 0);

$start->setTime(10, 0, 0);
$end = clone $start;
$end->setTime(18, 0, 0);
$interval = new DateInterval('PT1H');

$dateRange = new DatePeriod($start, $interval, $end);




