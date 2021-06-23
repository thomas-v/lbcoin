<?php

namespace App\Database;

use PHPUnit\Framework\TestCase;

class Manager extends TestCase{

    /** 
     * @test 
     * @doesNotPerformAssertions
     * */
    public function checkIfConstructorExists(){
        new App\Database\Manager();
    }
}