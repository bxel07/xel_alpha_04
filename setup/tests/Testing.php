<?php

    namespace setup\config;

    use PHPUnit\Framework\TestCase;
    
    class Testing extends TestCase
    {
        public function testcoba()
        {
            $test = 'halo';

            $this->assertEquals('halo', $test);
        }
    }

