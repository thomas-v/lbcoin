<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Treatment\Manager;

$app->get('/generic-fizzbuzz/{int1}/{int2}/{limit}/{str1}/{str2}', function (Request $request, Response $response, array $args) {
    
    $treatment = new Manager(
        $args['int1'],
        $args['int2'],
        $args['limit'],
        $args['str1'],
        $args['str2']
    );

    $response->getBody()->write("Hello, 'test'");

    return $response;
});