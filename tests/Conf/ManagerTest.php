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
}