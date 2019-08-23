<?php

namespace JpCarbon;

use Carbon\Carbon;

/**
 * @property-read string $holiday
 * @property-read string $eto
 */
class JpCarbon extends Carbon
{
    /**
     * @var array
     */
    protected static $etoMapping = ['申', '酉', '戌', '亥', '子', '丑', '寅', '卯', '辰', '巳', '午', '未'];

    /**
     * @param string|null               $time
     * @param \DateTimeZone|string|null $tz
     */
    public function __construct($time = null, $tz = null)
    {
        parent::__construct($time, $tz);
    }

    public function __get($name)
    {
        if ($name === 'holiday') {
            return $this->getHoliday();
        } elseif ($name === 'eto') {
            return $this->getEto();
        }

        return parent::__get($name);
    }

    /**
     * @return string
     */
    public function getHoliday()
    {
        list($y, $m, $d, $w) = [
            $this->year,
            $this->month,
            $this->day,
            $this->dayOfWeek,
        ];

        // 皇室慶弔行事に伴う休日
        if ($y === 1959 && $m === 4 && $d === 10) {
            return '皇太子・明仁親王の結婚の儀';
        } elseif ($y === 1989 && $m === 2 && $d === 24) {
            return '昭和天皇の大喪の礼';
        } elseif ($y === 1990 && $m === 11 && $d === 12) {
            return '即位礼正殿の儀';
        } elseif ($y === 1993 && $m === 6 && $d === 9) {
            return '皇太子・徳仁親王の結婚の儀';
        } elseif ($y === 2019 && $m === 4 && $d === 30) {
            return '国民の休日';
        } elseif ($y === 2019 && $m === 5 && $d === 1) {
            return '天皇の即位の日';
        } elseif ($y === 2019 && $m === 5 && $d === 2) {
            return '国民の休日';
        } elseif ($y === 2019 && $m === 10 && $d === 22) {
            return '即位礼正殿の儀';
        }

        // 東京オリンピック 特別措置法
        if ($y === 2020) {
            if ($m === 7) {
                if ($d === 23) {
                    return '海の日';
                } elseif ($d === 24) {
                    return 'スポーツの日';
                }
            } elseif ($m === 8) {
                if ($d === 10) {
                    return '山の日';
                }
            }
        }
        // 国民の祝日
        if ($m === 1) {
            if ($d === 1) {
                return '元日';
            } else {
                if (1949 <= $y && $y <= 1999) {
                    if ($d === 15) {
                        return '成人の日';
                    }
                } elseif (2000 <= $y) {
                    if (8 <= $d && $d <= 14 && $w === 1) {
                        return '成人の日';
                    }
                }
            }
        } elseif ($m === 2) {
            if (1967 <= $y) {
                if ($d === 11) {
                    return '建国記念の日';
                }
            }
            if (2020 <= $y && $d === 23) {
                return '天皇誕生日';
            }
        } elseif ($m === 3) {
            if (19 <= $d && $d <= 22) {
                if ($d === $this->shunBunDay($y)) {
                    return '春分の日';
                }
            }
        } elseif ($m === 4) {
            if ($d === 29) {
                if ($y <= 1988) {
                    return '天皇誕生日';
                } elseif ($y <= 2006) {
                    return 'みどりの日';
                } else {
                    return '昭和の日';
                }
            }
        } elseif ($m === 5) {
            if ($d === 3) {
                return '憲法記念日';
            } elseif ($d === 4) {
                if (1988 <= $y && $y <= 2006 && 1 <= $w && $w <= 6) {
                    return '国民の休日';
                } elseif (2007 <= $y) {
                    return 'みどりの日';
                }
            } elseif ($d === 5) {
                return 'こどもの日';
            }
        } elseif ($m === 7) {
            if (1996 <= $y && $y <= 2002) {
                if ($d === 20) {
                    return '海の日';
                }
            } elseif (2003 <= $y) {
                if (15 <= $d && $d <= 21 && $w === 1 && 2020 !== $y) {
                    return '海の日';
                }
            }
        } elseif ($m === 8) {
            if (2016 <= $y) {
                if ($d === 11 && 2020 !== $y) {
                    return '山の日';
                }
            }
        } elseif ($m === 9) {
            if (1966 <= $y && $y <= 2002) {
                if ($d === 15) {
                    return '敬老の日';
                }
            } elseif (2003 <= $y) {
                if (15 <= $d && $d <= 21 && $w === 1) {
                    return '敬老の日';
                }
            }
            if (2009 <= $y && $w !== 0) {
                if (21 <= $d && $d <= 23) {
                    if ($d + 1 === $this->shuuBunDay($y)) {
                        return '国民の休日';
                    }
                }
            }
            if (22 <= $d && $d <= 24) {
                if ($d === $this->shuuBunDay($y)) {
                    return '秋分の日';
                }
            }
        } elseif ($m === 10) {
            if (1966 <= $y && $y <= 1999) {
                if ($d === 10) {
                    return '体育の日';
                }
            } elseif (2000 <= $y) {
                if (8 <= $d && $d <= 14 && $w === 1 && $y !== 2020) {
                    if (2020 <= $y) {
                        return 'スポーツの日';
                    }

                    return '体育の日';
                }
            }
        } elseif ($m === 11) {
            if ($d === 3) {
                return '文化の日';
            } elseif ($d === 23) {
                return '勤労感謝の日';
            }
        } elseif ($m === 12) {
            if (1989 <= $y && $y <= 2018 && $d === 23) {
                return '天皇誕生日';
            }
        }

        if ($w === 1) {
            $yesterday = $this->copy()->subDays(1);
            if (self::createFromDate($yesterday->year, $yesterday->month, $yesterday->day)->holiday) {
                return '振替休日';
            }
        }

        return '';
    }

    /**
     * @return string
     */
    public function getEto()
    {
        return self::$etoMapping[$this->year % 12];
    }

    /**
     * @param $future
     * @param $present
     * @param $past
     * @param $y
     *
     * @return int
     */
    protected function calcDay($future, $present, $past, $y)
    {
        $add = 0.242194 * ($y - 1980) - floor(($y - 1980) / 4);
        $val = 0;

        switch (true) {
            case 2100 <= $y && $y <= 2150:
                $val = $future + $add;
                break;
            case 1980 <= $y:
                $val = $present + $add;
                break;
            case 1900 <= $y:
                $val = $past + $add;
                break;
        }

        return (int) $val;
    }

    /**
     * @param $y
     *
     * @return int
     */
    protected function shunBunDay($y)
    {
        return $this->calcDay(21.8519, 20.8431, 20.8357, $y);
    }

    /**
     * @param $y
     *
     * @return int
     */
    protected function shuuBunDay($y)
    {
        return $this->calcDay(24.2488, 23.2488, 23.2588, $y);
    }
}
