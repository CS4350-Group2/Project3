<?php

$app->get('/', function() {
    //echo "Hello, $name";
    require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'LoginForm.php');
});

$app->get('/welcome', function() {
    //echo "Hello, $name";
    require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'welcome.php');
});

$app->get('/register', function() {
    //echo "Hello, $name";
    require_once realpath(__DIR__.DIRECTORY_SEPARATOR.'register.php');
});

$app->post('/api', function() use($app){
    //echo "Hello, $name";
    
});

$app->run();