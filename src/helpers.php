<?php

use Lazerg\LaravelMacros\Facades\Math;

if (!function_exists('math')) {
    /**
     * Math functions
     *
     * @return Math
     */
    function math(): Math
    {
        return app('math');
    }
}
