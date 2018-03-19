<?php
//objecet cloning
$sample1 = new StdClass(); //declare an empty class.
$sample1->name = "Hasin";
$sample2 = $sample1;
$sample2->name = "Afif";
echo $sample1->name;

echo '<br>';

$sp1 = new stdClass();
$sp1->name = "Hasin";
$sp2 =clone $sample1;
$sp2->name = "Afif";
echo $sp1->name;

?>
