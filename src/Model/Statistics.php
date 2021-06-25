<?php

namespace App\Model;

use PDO;

class Statistics {
    public function __construct(
        private PDO|null $dbh
    ){}

    public function pushStats(string $api_query):void{
        try {
            $sql = 'SELECT * FROM fizzbuzz.stats WHERE query = :api_query';
            $sth = $this->dbh->prepare($sql);
            $sth->execute(array(':api_query' => $api_query));
    
            if(count($sth->fetchAll(PDO::FETCH_ASSOC)) === 0){
                $sql = 'INSERT INTO fizzbuzz.stats (query) VALUES (:api_query)';
                $sth = $this->dbh->prepare($sql);
                $sth->execute(array(':api_query' => $api_query));
            }
    
            $sql = 'UPDATE fizzbuzz.stats SET nb = nb + 1 WHERE query = :api_query';
            $sth = $this->dbh->prepare($sql);
            $sth->execute(array(':api_query' => $api_query));
    
        } catch (PDOException $e){
            error_log($e);
        }
    }

    public function getStats():Array {
        try {
            $sql = 'SELECT * FROM fizzbuzz.stats ORDER BY nb DESC LIMIT 1';
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            return $datas = $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            error_log($e);
        }
    }
}