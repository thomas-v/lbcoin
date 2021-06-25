<?php

namespace App\Model;

use PDO;

class Statistics {
    public function __construct(
        private PDO|null $dbh
    ){}
}