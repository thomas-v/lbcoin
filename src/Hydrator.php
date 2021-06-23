<?php

namespace App;

class Hydrator {
    public function hydrate(Array $datas){
        foreach($datas as $key => $value){
            $method = 'set'.ucfirst($key);
            echo $method;
        }
    }
}