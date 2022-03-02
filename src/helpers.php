<?php

use Lazerg\LaravelMacros\Services\Math;

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
