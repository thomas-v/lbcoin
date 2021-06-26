<?php

namespace Test\Treatment;

use App\Treatment\Manager;
use PHPUnit\Framework\TestCase;

class FizzbuzzTest extends TestCase {
    /**
     * @test
     */
    public function genericFizzbuzzWithLimit16(){
        $treatmentManager = new Manager(
            int1 : 3,
            int2 : 5,
            limit : 16,
            str1 : 'fizz',
            str2 : 'buzz'
        );
        $this->assertEquals('12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz16', $treatmentManager->genericFizzBuzz());
    }

    /**
     * @test
     */
    public function genericFizzbuzzWithLimit100(){
        $treatmentManager = new Manager(
            int1 : 3,
            int2 : 5,
            limit : 100,
            str1 : 'fizz',
            str2 : 'buzz'
        );
        $this->assertEquals('12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz1617fizz19buzzfizz2223fizzbuzz26fizz2829fizzbuzz3132fizz34buzzfizz3738fizzbuzz41fizz4344fizzbuzz4647fizz49buzzfizz5253fizzbuzz56fizz5859fizzbuzz6162fizz64buzzfizz6768fizzbuzz71fizz7374fizzbuzz7677fizz79buzzfizz8283fizzbuzz86fizz8889fizzbuzz9192fizz94buzzfizz9798fizzbuzz', $treatmentManager->genericFizzBuzz());
    }
}