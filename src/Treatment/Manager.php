<?php

namespace App\Treatment;

class Manager {
    public function __construct(
        private int $int1,
        private int $int2,
        private int $limit,
        private string $str1,
        private string $str2
    ){}

    public function getInt1():int {
        return $this->int1;
    }

    public function getInt2():int {
        return $this->int2;
    }

    public function getLimit():int {
        return $this->limit;
    }
}