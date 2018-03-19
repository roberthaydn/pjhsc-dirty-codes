<?php

//SUPERGLOBAL variables
foreach ($_SERVER as $key => $value) {
    echo '<pre><span style="color:green">'.$key.'</span>: '.print_r($value, TRUE).'</pre>';
}

?>
