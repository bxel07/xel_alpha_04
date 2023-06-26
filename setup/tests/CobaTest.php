<?php

namespace setup\config;

use devise\Service\Test;
use PHPUnit\Framework\TestCase;

class CobaTest extends TestCase
{
    public function testCoba2()
    {
        $x = 5;

        $this->assertEquals(5, $x);
    }

    public function testCoba3()
    {
        $test = new Test();
        $str = 'halo';
        $str2 = $test->testing();

        $this->assertEquals($str2, $str);
    }
}