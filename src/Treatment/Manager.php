<?php

namespace App\Treatment;

class Manager {

    private string|null $strTransformed;

    public function __construct(
        private int $int1,
        private int $int2,
        private int $limit,
        private string $str1,
        private string $str2
    ){
        $this->strTransformed = null;
    }

    public function getInt1():int {
        return $this->int1;
    }

    public function getInt2():int {
        return $this->int2;
    }

    public function getLimit():int {
        return $this->limit;
    }

    public function getStr1():string {
        return $this->str1;
    }

    public function getStr2():string {
        return $this->str2;
    }

    public function getStrTransformed():string|null {
        return $this->strTransformed;
    }
}