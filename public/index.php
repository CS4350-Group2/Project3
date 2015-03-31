<?php
require '../vendor/autoload.php';


$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->post('/', function () {
    echo "I am Garrett";
});

$app->post('/auth', function () {
    echo "instantiate controller here";
});

$app->run();
