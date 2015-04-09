<?php

$autoLoader = realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.
    DIRECTORY_SEPARATOR.'autoload.php');

require $autoLoader;

// Load server specific configuration data.  Should
// check an environment variable load the appropriate
// server configuration file.

\Slim\Slim::registerAutoloader();

require 'config.php';


$app = new \Slim\Slim();

require realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'app.php');