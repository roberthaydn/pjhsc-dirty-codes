<?php 

require 'flight/Flight.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/contact', function(){
    include 'contact.php';
});

Flight::route('/views/contact', function(){
    include './views/contact.php';
});

Flight::route('/contact/@id:[0-9]{2}', function($id){
    include 'contact.php';
});

Flight::route('/contact/@id:[0-9]{1}', function($id){
    include 'contact.php';
});

Flight::route('/shoes', function(){
    echo 'nike, vans, addidas, reebook';
});

Flight::route('/shoes/nike', function(){
    echo 'nike';
});

Flight::start();




