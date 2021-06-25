<?php

namespace Tests\Model;

use App\Model\Statistics;
use PHPUnit\Framework\TestCase;

use function App\Database\getDbh;

class StatisticsTest extends TestCase {
    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function insertStats(){

        $databaseManager = new \App\Database\Manager(
            database : 'fizzbuzz',
            port : 3306,
            user : 'fizzbuzz',
            password : 'fizzbuzz',
            host : 'db'
        );

        new Statistics($databaseManager->getDbh());
    }

}