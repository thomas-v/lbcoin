<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/generic-fizzbuzz/{int1}/{int2}/{limit}/{str1}/{str2}', function (Request $request, Response $response, array $args) {

    $response->getBody()->write("Hello, 'test'");

    return $response;
});