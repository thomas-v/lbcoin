<?php

use App\Treatment\Manager as TreatmentManager;
use App\Conf\Manager as ConfManager;
use App\Database\Manager as DbManager;

$statsMiddleware = function ($request, $response, $next) {

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
    $dbh = new DbManager(
        host : $confDb->getConf('database')["MARIADB_HOST"],
        port : $confDb->getConf('database')["MARIADB_PORT"],
        user : $confDb->getConf('database')["MARIADB_USER"],
        password : $confDb->getConf('database')["MARIADB_PASSWORD"],
        database : $confDb->getConf('database') ["MARIADB_DATABASE"]
    );

    $api_query = '/'.$treatment->getInt1().'/'.$treatment->getInt2().'/'.$treatment->getLimit().'/'.$treatment->getStr1().'/'.$treatment->getStr2();

    try {
        $sql = 'SELECT * FROM fizzbuzz.stats WHERE query = :api_query';
        $sth = $dbh->getDbh()->prepare($sql);
        $sth->execute(array(':api_query' => $api_query));

        if(count($sth->fetchAll(PDO::FETCH_ASSOC)) === 0){
            $sql = 'INSERT INTO fizzbuzz.stats (query) VALUES (:api_query)';
            $sth = $dbh->getDbh()->prepare($sql);
            $sth->execute(array(':api_query' => $api_query));
        }

        $sql = 'UPDATE fizzbuzz.stats SET nb = nb + 1 WHERE query = :api_query';
        $sth = $dbh->getDbh()->prepare($sql);
        $sth->execute(array(':api_query' => $api_query));

    } catch (PDOException $e){
        error_log($e);
    }

    //INSERT INTO fizzbuzz.utilisateur (id, nom) VALUES (11, 'Thomas');

    return $response;
};