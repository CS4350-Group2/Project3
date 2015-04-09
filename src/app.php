<?php

$app->get('/', function() {

    require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.
    'LoginForm.php');
});

$app->get('/welcome', function() {

    require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.
        'Welcome.php');
});

$app->get('/register', function() {

    require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.
        'Register.php');
});

$app->post('/api', function() use($app){

    $username = $app->request()->params('username');
    $password = $app->request()->params('password');

    $loggingUser = new \Common\Authentication\SQLite($username,$password);

    if($loggingUser !== true)
    {
        $app->response()->setStatus(401);
        $app->response()->getStatus();
        return json_encode($app->response()->header('No User Created:localhost:8080/register'));
    }

    if($loggingUser === true)
    {
        $app->response()->setStatus(200);
        $app->response()->getStatus();

        return json_encode($app->response()->header('Welcome to your account : localhost:8080/welcome'));
    }
    
});

$app->run();

