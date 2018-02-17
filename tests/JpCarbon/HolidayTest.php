<?php

namespace JpCarbon\Tests\JpCarbon;

use JpCarbon\JpCarbon;
use PHPUnit_Framework_TestCase;

class HolidayTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param array  $date
     * @param string $expected
     *
     * @dataProvider dataProvider2017
     */
    public function testHoliday($date, $expected)
    {
        list($y, $m, $d) = $date;
        $this->assertEquals($expected, JpCarbon::createFromDate($y, $m, $d)->holiday);
    }

    public function dataProvider2017()
    {
        return array(
            array(array(2017,  1,  1), '元日'),
            array(array(2017,  1,  2), '振替休日'),
            array(array(2017,  1,  9), '成人の日'),
            array(array(2017,  2, 11), '建国記念の日'),
            array(array(2017,  3, 20), '春分の日'),
            array(array(2017,  4, 29), '昭和の日'),
            array(array(2017,  5,  3), '憲法記念日'),
            array(array(2017,  5,  4), 'みどりの日'),
            array(array(2017,  5,  5), 'こどもの日'),
            array(array(2017,  7, 17), '海の日'),
            array(array(2017,  8, 11), '山の日'),
            array(array(2017,  9, 18), '敬老の日'),
            array(array(2017,  9, 23), '秋分の日'),
            array(array(2017, 10,  9), '体育の日'),
            array(array(2017, 11,  3), '文化の日'),
            array(array(2017, 11, 23), '勤労感謝の日'),
            array(array(2017, 12, 23), '天皇誕生日'),
        );
    }

    /**
     * @param array  $date
     * @param string $expected
     *
     * @dataProvider dataProvider天皇誕生日
     */
    public function test天皇誕生日($date, $expected)
    {
        list($y, $m, $d) = $date;
        $this->assertEquals($expected, JpCarbon::createFromDate($y, $m, $d)->holiday);
    }

    public function dataProvider天皇誕生日()
    {
        return array(
            array(array(2017, 12, 23), '天皇誕生日'),
            array(array(2018, 12, 23), '天皇誕生日'),
            array(array(2019, 12, 23), ''),
            array(array(2020, 12, 23), ''),
        );
    }
}
