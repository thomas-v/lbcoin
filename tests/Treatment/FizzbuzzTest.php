<?php

namespace Test\Treatment;

use App\Treatment\Manager;
use PHPUnit\Framework\TestCase;

class FizzbuzzTest extends TestCase {
    /**
     * @test
     */
    public function returnStringOfListNum1ToLimit(){
        $treatmentManager = new Manager(
            int1 : 3,
            int2 : 5,
            limit : 16,
            str1 : 'fizz',
            str2 : 'buzz'
        );
        $this->assertEquals('12345678910111213141516', $treatmentManager->genericFizzBuzz());
    }
}