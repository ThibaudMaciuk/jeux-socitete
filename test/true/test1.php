<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require __DIR__.'/../../app/jeton.php';

class test1 extends TestCase
{

    public function test_1()
    {
        $this->assertEquals(4, 2*2);
    }

}