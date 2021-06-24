<?php

namespace App\Conf;

class Manager {

    const CONF_DIRECTORY = './conf/';

    private Array $confFiles;

    public function __construct(){
        $this->getJsonConfFiles();
    }

    private function getJsonConfFiles():void {
         $this->setConfFiles(array_slice(scandir(self::CONF_DIRECTORY), 2));
    }

    public function getConfFiles():Array {
        return $this->confFiles;
    }

    public function setConfFiles(Array $array):void {
        $this->confFiles = $array;
    }
}