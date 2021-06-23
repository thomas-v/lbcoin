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
    ){}
}