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
}