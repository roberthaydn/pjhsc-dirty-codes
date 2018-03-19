<?php

class Appliance {
 private $_power;
 function setPower($status) {
  return $this->_power = $status;
 }
}


$blender = new Appliance;
echo $blender->setPower("on");


?>

