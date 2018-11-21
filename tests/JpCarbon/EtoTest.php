<?php

namespace JpCarbon\Tests\JpCarbon;

use JpCarbon\JpCarbon;
use PHPUnit\Framework\TestCase;

class EtoTest extends TestCase
{
    /**
     * @param int    $y
     * @param string $expected
     *
     * @dataProvider dataProvider
     */
    public function testEto($y, $expected)
    {
        $this->assertEquals($expected, JpCarbon::createFromDate($y)->eto);
    }

    public function dataProvider()
    {
        return [
            [2000, '辰'],
            [2001, '巳'],
            [2002, '午'],
            [2003, '未'],
            [2004, '申'],
            [2005, '酉'],
            [2006, '戌'],
            [2007, '亥'],
            [2008, '子'],
            [2009, '丑'],
            [2010, '寅'],
            [2011, '卯'],
            [2012, '辰'],
            [2013, '巳'],
            [2014, '午'],
            [2015, '未'],
            [2016, '申'],
            [2017, '酉'],
            [2018, '戌'],
            [2019, '亥'],
            [2020, '子'],
        ];
    }
}
