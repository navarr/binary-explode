<?php

namespace Navarr\ExplodeBitwise\Test;

class TestBinaryExplodeLog extends \PHPUnit_Framework_TestCase
{
    public function retrieveResult($number)
    {
        return binary_explode_log($number);
    }

    public function testZero()
    {
        $result = $this->retrieveResult(0);

        $this->assertTrue(is_array($result));
        $this->assertEmpty($result);
    }

    public function testNegative()
    {
        for ($i = -10; $i < 0; ++$i) {
            $result = $this->retrieveResult($i);

            $this->assertTrue(is_array($result));
            $this->assertEmpty($result);
        }
    }

    public function testTwo()
    {
        $result = $this->retrieveResult(2);

        $this->assertTrue(is_array($result));
        $this->assertEquals([2], $result);
    }

    public function testTenTwentyFour()
    {
        $result = $this->retrieveResult(1024);

        $this->assertTrue(is_array($result));
        $this->assertEquals([1024], $result);
    }

    public function testSeven()
    {
        $result = $this->retrieveResult(7);

        $this->assertTrue(is_array($result));

        foreach ([1, 2, 4] as $test) {
            $this->assertTrue(in_array($test, $result));
        }
    }
}
