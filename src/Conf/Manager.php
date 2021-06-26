<?php

namespace App\Conf;

class Manager {

    const CONF_DIRECTORY = '/prod/fizzbuzz-api/conf/';

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

    public function getConf(string $confName):Array{
        return $this->confExctractor($confName);
    }

    private function confExctractor(string $confName):Array{
        if(!in_array($confName.'.json', $this->getConfFiles())){
            throw new \RuntimeException('Configuration '.$confName.' inconnue');
        }
        return json_decode(file_get_contents(self::CONF_DIRECTORY.$confName.'.json'), true)[$confName];
    }
}