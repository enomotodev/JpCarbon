<?php

namespace JpCarbon\Tests\JpCarbon;

use JpCarbon\JpCarbon;
use PHPUnit_Framework_TestCase;

class EtoTest extends PHPUnit_Framework_TestCase
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
        return array(
            array(2000, '辰'),
            array(2001, '巳'),
            array(2002, '午'),
            array(2003, '未'),
            array(2004, '申'),
            array(2005, '酉'),
            array(2006, '戌'),
            array(2007, '亥'),
            array(2008, '子'),
            array(2009, '丑'),
            array(2010, '寅'),
            array(2011, '卯'),
            array(2012, '辰'),
            array(2013, '巳'),
            array(2014, '午'),
            array(2015, '未'),
            array(2016, '申'),
            array(2017, '酉'),
            array(2018, '戌'),
            array(2019, '亥'),
            array(2020, '子'),
        );
    }
}
