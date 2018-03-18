<?php

require_once '../app/core/Init.php';


echo '<h3>Home.blade</h3>';

$person = PersonModelFactory::Create();
$person->setFirstName('ACTUAL MODEL: Kanor!');
echo $person->getFirstName();


echo '<br><br>';


$model = PersonModelFactory::Create();
$model->setLastName('HASeralwerjlkawjerlkawejrlkewa');
/*
$model->setID(2131);
$model->setUsername('laravel');
$model->setFirstName('john');
$model->setLastName('resig');
$model->setPassword('password');
$model->setGender('gender');
$model->setAge('age'); 
$model->setSalary(123);
$model->setAbsent(1233);
$model->setStatus('single');
*/

$view = PersonViewFactory::Create();

$controller = PersonControllerFactory::Create();
$controller->setPersonModel($model);
//view setter
$controller->setPersonView($view);
//view
$controller->RequestPersonLastname();

echo $requestedData = $controller->RequestedPersonLastname();

?>
