<?php
/*
returns an array containing the names of all classes defined within
the currently executing script. The output of this function will vary according to how your PHP
distribution is configured. For instance, executing get_declared_classes()  on a test server produces a
list of 136 classes. 

*/
echo '<pre>';

print_r(get_declared_classes());

echo '</pre>';

?>
