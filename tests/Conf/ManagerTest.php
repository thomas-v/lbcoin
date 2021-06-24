<?php

namespace Tests\Conf;

use PHPUnit\Framework\TestCase;
use RuntimeException;

class ManagerTest extends TestCase {

    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function callConstructor(){
        new \App\Conf\Manager();
    }

    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function getJsonConfFiles(){
        $confManager = new \App\Conf\Manager();
        $confManager->getConfFiles();
    }

    /**
     * @test
     */
    public function getConfByKeyUnknown(){
        $this->expectException(RuntimeException::class);
        $confManager = new \App\Conf\Manager();
        $confManager->getConf(confName : 'unknown');
    }

    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function getConfByKey(){
        $confManager = new \App\Conf\Manager();
        $confManager->getConf(confName : 'database');
    }
}