<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class HydratorTest extends TestCase{

    /** 
     * @test 
     * @doesNotPerformAssertions
     * */
    public function checkIfConstructorExists(){
        new \App\Hydrator();
    }
}