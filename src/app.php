<?php

$app->get('/', function() {
    //echo "Hello, $name";
    require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.
    'LoginForm.php');
});

$app->get('/welcome', function() {
    //echo "Hello, $name";
    require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.
        'Welcome.php');
});

$app->get('/register', function() {
    //echo "Hello, $name";
    require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.
        'Register.php');
});

$app->post('/api', function() use($app){
    //echo "Hello, $name";
    
});

$app->run();

