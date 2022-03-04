<?php

namespace Lazerg\LaravelMacros\Services;

use Illuminate\Support\Traits\Macroable;

class Math
{
    use Macroable;

    /** Absolute value
     *
     * @param int|float $number
     * @return int|float
     */
    public function abs(int|float $number): int|float
    {
        return abs($number);
    }

    /**
     * Finds whether a value is between range
     *
     * @param int|float $number
     * @param int|float $from
     * @param int|float $to
     * @return bool
     */
    public function in(int|float $number, int|float $from, int|float $to): bool
    {
        return $number >= $from && $number <= $to;
    }
}
