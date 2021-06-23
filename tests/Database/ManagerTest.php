<?php

namespace Tests\Database;

use PDOException;
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
    public function callConstructorWithParameters(){
        new \App\Database\Manager(
            database : 'fizzbuzz',
            port : 3306,
            user : 'fizzbuzz',
            password : 'fizzbuzz',
            host : 'db'

        );
    }

    /**
     * @test
     */
    public function connectionToDatabaseFailed(){
        $this->expectException(PDOException::class);
        new \App\Database\Manager(
            database : 'db',
            port : 3306,
            user : 'fizz',
            password : 'fizz',
            host : 'db'
        );
    }

}