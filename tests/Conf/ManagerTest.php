<?php

namespace Tests\Conf;

use PHPUnit\Framework\TestCase;

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
        $confManager->getJsonConfFiles();
    }
}