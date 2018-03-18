<?php

require_once '../app/core/Init.php';

echo '<h3>Home.blade</h3>';

$connection = new Connection();
echo $connection->getConnection('Conenction<br>');

$model1 = new Model1();
echo $model1->getModel1('Model1<br>');

$model2 = new Model2();
echo $model2->getModel2('Model2<br>');

$con = new Controller();
echo $con->getController('Controller<br>');

$view1 = new View1();
$view1->getView('View1<br>');

$view2 = new View2();
echo $view2->getView('View2<br>');


?>