<?php

namespace Tests\Database;

use PHPUnit\Framework\TestCase;

class Manager extends TestCase{

    /**
     * @test
     */
    public function callConstructorWithoutParameter(){
        $this->expectError();
        new \App\Database\Manager(new \stdClass());
    }

}