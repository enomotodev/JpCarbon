<?php

namespace JpCarbon\Tests\JpCarbon;

use JpCarbon\JpCarbon;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
    public function testHelperMethod()
    {
        $format = 'Y/m/d H:i:s';
        $this->assertEquals(jp_carbon('now')->format($format), JpCarbon::parse('now')->format($format));
    }
}
