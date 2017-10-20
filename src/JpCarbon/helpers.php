<?php

use JpCarbon\JpCarbon;

if (!function_exists('jp_carbon')) {
    /**
     * @param string|null $time
     *
     * @return \JpCarbon\JpCarbon
     */
    function jp_carbon($time = null)
    {
        return $time ? JpCarbon::parse($time) : JpCarbon::now();
    }
}
