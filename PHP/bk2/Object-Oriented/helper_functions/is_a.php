<?php
/*
function returns TRUE if object belongs to a class of type class_name or if it belongs to a class
that is a child of class_name. If object bears no relation to the class_name type, FALSE is returned.
*/

// define a class
class WidgetFactory
{
  var $oink = 'moo';
}

// create a new object
$WF = new WidgetFactory();

if (is_a($WF, 'WidgetFactory')) {
  echo "yes, \$WF is still a WidgetFactory\n";
}

?>