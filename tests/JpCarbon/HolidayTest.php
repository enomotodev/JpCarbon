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
    public function testHoliday2017($date, $expected)
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
     * @dataProvider dataProvider2018
     */
    public function testHoliday2018($date, $expected)
    {
        list($y, $m, $d) = $date;
        $this->assertEquals($expected, JpCarbon::createFromDate($y, $m, $d)->holiday);
    }

    public function dataProvider2018()
    {
        return array(
            array(array(2018,  1,  1), '元日'),
            array(array(2018,  1,  8), '成人の日'),
            array(array(2018,  2, 11), '建国記念の日'),
            array(array(2018,  2, 12), '振替休日'),
            array(array(2018,  3, 21), '春分の日'),
            array(array(2018,  4, 29), '昭和の日'),
            array(array(2018,  4, 30), '振替休日'),
            array(array(2018,  5,  3), '憲法記念日'),
            array(array(2018,  5,  4), 'みどりの日'),
            array(array(2018,  5,  5), 'こどもの日'),
            array(array(2018,  7, 16), '海の日'),
            array(array(2018,  8, 11), '山の日'),
            array(array(2018,  9, 17), '敬老の日'),
            array(array(2018,  9, 23), '秋分の日'),
            array(array(2018,  9, 24), '振替休日'),
            array(array(2018, 10,  8), '体育の日'),
            array(array(2018, 11,  3), '文化の日'),
            array(array(2018, 11, 23), '勤労感謝の日'),
            array(array(2018, 12, 23), '天皇誕生日'),
            array(array(2018, 12, 24), '振替休日'),
        );
    }

    /**
     * @param array  $date
     * @param string $expected
     *
     * @dataProvider dataProvider2019
     */
    public function testHoliday2019($date, $expected)
    {
        list($y, $m, $d) = $date;
        $this->assertEquals($expected, JpCarbon::createFromDate($y, $m, $d)->holiday);
    }

    public function dataProvider2019()
    {
        return array(
            array(array(2019,  1,  1), '元日'),
            array(array(2019,  1, 14), '成人の日'),
            array(array(2019,  2, 11), '建国記念の日'),
            array(array(2019,  3, 21), '春分の日'),
            array(array(2019,  4, 29), '昭和の日'),
            array(array(2019,  4, 30), '国民の休日'),
            array(array(2019,  5,  1), '天皇の即位の日'),
            array(array(2019,  5,  2), '国民の休日'),
            array(array(2019,  5,  3), '憲法記念日'),
            array(array(2019,  5,  4), 'みどりの日'),
            array(array(2019,  5,  5), 'こどもの日'),
            array(array(2019,  5,  6), '振替休日'),
            array(array(2019,  7, 15), '海の日'),
            array(array(2019,  8, 11), '山の日'),
            array(array(2019,  8, 12), '振替休日'),
            array(array(2019,  9, 16), '敬老の日'),
            array(array(2019,  9, 23), '秋分の日'),
            array(array(2019, 10, 14), '体育の日'),
            array(array(2019, 10, 22), '即位礼正殿の儀'),
            array(array(2019, 11,  3), '文化の日'),
            array(array(2019, 11,  4), '振替休日'),
            array(array(2019, 11, 23), '勤労感謝の日'),
        );
    }

    /**
     * @param array  $date
     * @param string $expected
     *
     * @dataProvider dataProvider2020
     */
    public function testHoliday2020($date, $expected)
    {
        list($y, $m, $d) = $date;
        $this->assertEquals($expected, JpCarbon::createFromDate($y, $m, $d)->holiday);
    }

    public function dataProvider2020()
    {
        return array(
            array(array(2020,  1,  1), '元日'),
            array(array(2020,  1, 13), '成人の日'),
            array(array(2020,  2, 11), '建国記念の日'),
            array(array(2020,  2, 23), '天皇誕生日'),
            array(array(2020,  2, 24), '振替休日'),
            array(array(2020,  3, 20), '春分の日'),
            array(array(2020,  4, 29), '昭和の日'),
            array(array(2020,  5,  3), '憲法記念日'),
            array(array(2020,  5,  4), 'みどりの日'),
            array(array(2020,  5,  5), 'こどもの日'),
            array(array(2020,  7, 23), '海の日'),
            array(array(2020,  7, 24), 'スポーツの日'),
            array(array(2020,  8, 10), '山の日'),
            array(array(2020,  9, 21), '敬老の日'),
            array(array(2020,  9, 22), '秋分の日'),
            array(array(2020, 11,  3), '文化の日'),
            array(array(2020, 11, 23), '勤労感謝の日'),
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
            array(array(2020,  2, 23), '天皇誕生日'),
            array(array(2021,  2, 23), '天皇誕生日'),
        );
    }

    /**
     * @param array  $date
     * @param string $expected
     *
     * @dataProvider dataProvider海の日
     */
    public function test海の日($date, $expected)
    {
        list($y, $m, $d) = $date;
        $this->assertEquals($expected, JpCarbon::createFromDate($y, $m, $d)->holiday);
    }

    public function dataProvider海の日()
    {
        return array(
            array(array(2017,  7, 17), '海の日'),
            array(array(2018,  7, 16), '海の日'),
            array(array(2019,  7, 15), '海の日'),
            array(array(2020,  7, 20), ''),
            array(array(2020,  7, 23), '海の日'),
            array(array(2021,  7, 19), '海の日'),
        );
    }

    /**
     * @param array  $date
     * @param string $expected
     *
     * @dataProvider dataProviderスポーツの日
     */
    public function testスポーツの日($date, $expected)
    {
        list($y, $m, $d) = $date;
        $this->assertEquals($expected, JpCarbon::createFromDate($y, $m, $d)->holiday);
    }

    public function dataProviderスポーツの日()
    {
        return array(
            array(array(2017, 10,  9), '体育の日'),
            array(array(2018, 10,  8), '体育の日'),
            array(array(2019, 10, 14), '体育の日'),
            array(array(2020, 10, 12), ''),
            array(array(2020,  7, 24), 'スポーツの日'),
            array(array(2021, 10, 11), 'スポーツの日'),
        );
    }

    /**
     * @param array  $date
     * @param string $expected
     *
     * @dataProvider dataProvider山の日
     */
    public function test山の日($date, $expected)
    {
        list($y, $m, $d) = $date;
        $this->assertEquals($expected, JpCarbon::createFromDate($y, $m, $d)->holiday);
    }

    public function dataProvider山の日()
    {
        return array(
            array(array(2017,  8, 11), '山の日'),
            array(array(2018,  8, 11), '山の日'),
            array(array(2019,  8, 11), '山の日'),
            array(array(2020,  8, 11), ''),
            array(array(2020,  8, 10), '山の日'),
            array(array(2021,  8, 11), '山の日'),
        );
    }
}
