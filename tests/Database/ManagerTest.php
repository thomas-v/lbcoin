<?php

namespace Tests\Database;

use PHPUnit\Framework\TestCase;

class ConnectorInterfaceTest {

}

class Manager extends TestCase{

    /**
     * @test
     */
    public function callConstructorWithoutParameter(){
        $this->expectError();
        new \App\Database\Manager();
    }

    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function connectionToDatabase(){
        new \App\Database\Manager(
            database : 'db',
            port : 3306,
            user : 'fizzbuzz',
            password : 'fizzbuzz',
            host : 'db'

        );
    }

}