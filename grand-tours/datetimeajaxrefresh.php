<?php

require_once 'autoload.php';

use app\lib\datetime\SimpleDate;

$simpleDate = SimpleDate::Create();

?>

<?= $simpleDate->getFormat('m/d/Y - h:i:s A'); ?>

<input type="hidden" name="hdate" id="hdate" value="<?= $simpleDate->getFormat('m/d/Y/h:i/A'); ?>">


