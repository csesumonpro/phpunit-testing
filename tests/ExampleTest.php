<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    // Make sure you need to add prefix "test" to test method name otherwise it will not run
    public function testTwoPlusTwoEqualFour()
    {
        $this->assertEquals(4, 2 + 2);
    }
    // Alternative way of writing above test method without test prefix
    //  Just use a dock block @test this tell phpunit to run this test method
    /**
     * @test
     */
    public function TwoPlusTwoEqualFour()
    {
        $this->assertEquals(4, 2 + 2);
    }
}
