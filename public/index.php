<?php
require '../vendor/autoload.php';
require 'config.php';

$app = new \Slim\Slim();


\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim(
    $config['app']['slim-config']
);

// $app->get('/hello/:name', function ($name) {
//     echo "Hello, $name";
// });

// $app->post('/', function () {
//     echo "I am Garrett";
// });

// $app->post('/auth', function () {
//     echo "instantiate controller here";
// });


$app->get('/login/', function () {
	
    $logincontroller = new \Controllers\AuthController();
    $logincontroller->action();
});

$app->post('/login/', function () {
    $logincontroller = new \Controllers\AuthController();
    $logincontroller->login();
});
// add another view here
// $app->get('/welcome/', function () {
//     $logincontroller = new \Controllers\AuthController();
//     $logincontroller->login();
// }); 

$app->run();
