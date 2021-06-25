<?php

namespace Tests\Model;

use App\Database\Manager;
use App\Model\Statistics;
use PHPUnit\Framework\TestCase;

class StatisticsTest extends TestCase {
    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function insertStats(){

        $databaseManager = new Manager(
            database : 'fizzbuzz',
            port : 3306,
            user : 'fizzbuzz',
            password : 'fizzbuzz',
            host : 'db'
        );
        $dbh = $databaseManager->getDbh();

        $model = new Statistics($dbh);
        $model->pushStats('/3/5/50/fizz/buzz');
    }

}