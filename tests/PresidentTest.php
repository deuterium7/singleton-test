<?php

namespace AlexanderZabornyi\SingletonTest;

use PHPUnit\Framework\TestCase;

class PresidentTest extends TestCase
{
    public function testUniqueness()
    {
        $presidentFirst = President::getInstance();
        $presidentSecond = President::getInstance();

        $this->assertInstanceOf(President::class, $presidentFirst);
        $this->assertSame($presidentFirst, $presidentSecond);
    }
}