<?php

namespace Navarr\BinaryExploder\Test;

use Navarr\BinaryExploder\LinearBinaryExploder;
use PHPUnit\Framework\TestCase;

class LinearBinaryExploderTest extends TestCase
{
    public function retrieveResult($number)
    {
        $exploder = new LinearBinaryExploder();
        $result = $exploder->explode($number);
        return iterator_to_array($result);
    }

    public function testZero()
    {
        $result = $this->retrieveResult(0);

        $this->assertEmpty($result);
    }

    public function testNegative()
    {
        for ($i = -10; $i < 0; ++$i) {
            $result = $this->retrieveResult($i);

            $this->assertEmpty($result);
        }
    }

    public function testTwo()
    {
        $result = $this->retrieveResult(2);

        $this->assertEquals([2], $result);
    }

    public function testTenTwentyFour()
    {
        $result = $this->retrieveResult(1024);

        $this->assertEquals([1024], $result);
    }

    public function testSeven()
    {
        $result = $this->retrieveResult(7);

        foreach ([1, 2, 4] as $test) {
            $this->assertTrue(in_array($test, $result));
        }
    }
}
