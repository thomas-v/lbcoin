<?php

use App\Model\Statistics;
use App\Conf\Manager as ConfManager;
use App\Database\Manager as DbManager;
use App\Treatment\Manager as TreatmentManager;

$pushStatsMiddleware = function ($request, $response, $next) {

    $response = $next($request, $response);

    $route = $request->getAttribute('route');

    $treatment = new TreatmentManager(
        int1 : $route->getArguments()['int1'],
        int2 : $route->getArguments()['int2'],
        str1 : $route->getArguments()['str1'],
        str2 : $route->getArguments()['str2'],
        limit : $route->getArguments()['limit']
    );

    
    $confDb = new ConfManager();
    $databaseManager = new DbManager(
        host : $confDb->getConf('database')["MARIADB_HOST"],
        port : $confDb->getConf('database')["MARIADB_PORT"],
        user : $confDb->getConf('database')["MARIADB_USER"],
        password : $confDb->getConf('database')["MARIADB_PASSWORD"],
        database : $confDb->getConf('database') ["MARIADB_DATABASE"]
    );
    $dbh = $databaseManager->getDbh();

    $api_query = '/'.$treatment->getInt1().'/'.$treatment->getInt2().'/'.$treatment->getLimit().'/'.$treatment->getStr1().'/'.$treatment->getStr2();

    $model = new Statistics($dbh);
    $model->pushStats($api_query);

    return $response;
};

$getStatsMiddleware = function ($request, $response, $next) {
    $confDb = new ConfManager();
    $databaseManager = new DbManager(
        host : $confDb->getConf('database')["MARIADB_HOST"],
        port : $confDb->getConf('database')["MARIADB_PORT"],
        user : $confDb->getConf('database')["MARIADB_USER"],
        password : $confDb->getConf('database')["MARIADB_PASSWORD"],
        database : $confDb->getConf('database') ["MARIADB_DATABASE"]
    );
    $dbh = $databaseManager->getDbh();

    $model = new Statistics($dbh);
    $datas = $model->getStats();

    $request = $request->withAttribute('firstQuery', $datas);

    $response = $next($request, $response);

    return $response;
};