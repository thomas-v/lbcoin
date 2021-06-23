<?php

namespace App\Database;

use PDO;
use PDOException;

class Manager {

    private PDO|null $dbh;

    public function __construct(
        private string $host,
        private int $port,
        private string $user,
        private string $password,
        private string $database
    ){
        try {
            $this->dbh = new PDO('mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->database, $this->user, $this->password);
        } catch (PDOException $e){
            throw new \RuntimeException('Echec de la connection à la BDD');
        }
        
    }

    public function getDbh():PDO{
        return $this->dbh;
    }

    public function close():void{
        $this->dbh = null;
    }
}