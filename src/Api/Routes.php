<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Treatment\Manager;

$app->get('/generic-fizzbuzz/{int1}/{int2}/{limit}/{str1}/{str2}', function (Request $request, Response $response, array $args) {
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
            'content' => ''
        ];
    } else {
        $data = [
            'status' => 'success',
            'content' => $str
        ];
    }

    return $response->withJson($data, $statusCode);

});