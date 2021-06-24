<?php

namespace Tests\Treatment;

use PHPUnit\Framework\TestCase;

class ManagerTest extends TestCase {
    /**
     * @test
     */
    public function callConstructorWithoutParameters(){
        $this->expectError();
        new \App\Treatment\Manager();
    }

    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function callConstructorWithParameters(){
        new \App\Treatment\Manager(
            int1 : 3, 
            int2 : 5, 
            limit : 100,
            str1 : 'fizz',
            str2 : 'buzz'
        );
    }
}