<?php

namespace App\Database;

use PDO;

class Manager {

    private PDO|null $dbh;

    public function __construct(
        private string $host,
        private int $port,
        private string $user,
        private string $password,
        private string $database
    ){
        $this->dbh = new PDO('mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->database, $this->user, $this->password);
    }

    public function getDbh():PDO{
        return $this->dbh;
    }
}