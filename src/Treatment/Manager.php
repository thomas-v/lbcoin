<?php

namespace App\Treatment;

use Exception;

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

    public function genericFizzbuzz():string {
        try {
            $str = '';
            for($i = 1; $i <= $this->getLimit(); $i++){
                if ($i % $this->getInt1() == 0 && $i % $this->getInt2() == 0){
                    $str .= strval($this->getStr1().$this->getStr2());
                    continue;
                }
                if ($i % $this->getInt1() == 0){
                    $str .= strval($this->getStr1());
                    continue;
                }
                if ($i % $this->getInt2() == 0){
                    $str .= strval($this->getStr2());
                    continue;
                }
                $str .= strval($i);
            }
            return $str;
        } catch (Exception $e){
            error_log($e);
            return null;
        }
        
    }
}