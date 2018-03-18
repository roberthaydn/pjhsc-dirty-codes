<?php 

require 'flight/Flight.php';

Flight::route('/', function(){
    echo 'index page';
});

Flight::route('/names', function(){
    require_once 'names.php';
});

Flight::start();




