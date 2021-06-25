<?php

use Slim\Http\Request;
use Slim\Http\Response;

require_once '../vendor/autoload.php';

$app = new \Slim\App;

require '../src/Api/Routes.php';

$app->run();