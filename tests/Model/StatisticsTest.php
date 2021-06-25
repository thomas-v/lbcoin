<?php

namespace Tests\Model;

use App\Model\Statistics;
use PHPUnit\Framework\TestCase;

class StatisticsTest extends TestCase {
    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function insertStats(){
        new Statistics();
    }

}