<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Treatment\Manager;

require_once 'Middlewares.php';

$app->get('/v1/generic-fizzbuzz/{int1}/{int2}/{limit}/{str1}/{str2}', function (Request $request, Response $response, array $args) {
    $treatment = new Manager(
        int1 : $args['int1'],
        int2 : $args['int2'],
        str1 : $args['str1'],
        str2 : $args['str2'],
        limit : $args['limit']
    );

    $str = $treatment->genericFizzbuzz();
    $data = [];
    $statusCode = 200;
    if($str == null){
        $statusCode = 500;
        $data = [
            'status' => 'error',
            'result' => ''
        ];
    } else {
        $data = [
            'status' => 'success',
            'result' => $str
        ];
    }
    
    return $response->withJson($data, $statusCode);
})->add($pushStatsMiddleware);

$app->get('/v1/statistics', function (Request $request, Response $response, array $args) {
    $data = [];
    $statusCode = 200;
    if($request->getAttribute('firstQuery') == false){
        $data = [
            'status' => 'success',
            'result' => 'No one query send yet'
        ];
    }
    else if(!$request->getAttribute('firstQuery')['query'] || !$request->getAttribute('firstQuery')['nb']){
        $statusCode = 500;
        $data = [
            'status' => 'error',
            'result' => ''
        ];
    } else {
        $data = [
            'status' => 'success',
            'result' => [
                'maxQuery' => $request->getAttribute('firstQuery')['query'],
                'count' => $request->getAttribute('firstQuery')['nb']
            ]
        ];
    }
    
    return $response->withJson($data, $statusCode);
})->add($getStatsMiddleware);