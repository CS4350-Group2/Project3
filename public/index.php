<?php
require '../vendor/autoload.php';
require 'config.php';

$app = new \Slim\Slim();


\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim(
    $config['app']['slim-config']
);



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
