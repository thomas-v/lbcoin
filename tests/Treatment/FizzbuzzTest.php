<?php

namespace Test\Treatment;

use App\Treatment\Manager;
use PHPUnit\Framework\TestCase;

class FizzbuzzTest extends TestCase {
    /**
     * @test
     */
    public function returnStr1ForInt1(){
        $treatmentManager = new Manager(
            int1 : 3,
            int2 : 5,
            limit : 100,
            str1 : 'fizz',
            str2 : 'buzz'
        );
        $this->assertEquals('fizz', $treatmentManager->genericFizzBuzz());
    }
}