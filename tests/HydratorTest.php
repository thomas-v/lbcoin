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

    /** 
     * @test 
     * @doesNotPerformAssertions
     * */
    public function checkIfHydrateFunctionExists(){
        $hydrator = new \App\Hydrator();
        $hydrator->hydrate([
            'test' => null
        ]);
    }

    /** 
     * @test 
     * */
    public function showSetTestIfParamIsTestKey(){
        $this->expectOutputString('setTest');

        $hydrator = new \App\Hydrator();
        $hydrator->hydrate([
            'test' => null
        ]);
    }
}
