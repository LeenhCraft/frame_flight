<?php
require '../vendor/autoload.php';

Flight::route('/', function () {
    // echo 'hello world!';
    Flight::json(array('id' => 123));
});

Flight::route('/news', function(){
    Flight::lastModified(1234567890);
    echo 'This content will be cached.';
});

Flight::start();
