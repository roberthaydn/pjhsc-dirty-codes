<?php

require_once '../app/core/Init.php';


echo '<h3>Home.blade</h3>';

$person = PersonModelFactory::Create();
$person->setFirstName('ACTUAL MODEL: Kanor!');
echo $person->getFirstName();


?>