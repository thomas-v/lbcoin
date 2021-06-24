<?php

namespace Tests\Treatment;

use PHPUnit\Framework\TestCase;

class ManagerTest extends TestCase {
    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function callConstructor(){
        new \App\Treatment\Manager();
    }
}