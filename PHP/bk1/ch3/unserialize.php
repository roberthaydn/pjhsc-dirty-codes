<?php
include_once("serialization.php");
//include_once("serialization.php"); <- returns __PHP_Incomplete_Class Object
// __PHP_Incomplete_Class_Name.. if you leave this in comments.

echo '<br><br><br>';

$serializedcontent = file_get_contents("text.txt");
$unserializedcontent = unserialize($serializedcontent);

echo '<pre>';
print_r($unserializedcontent).'</pre>';

?>
