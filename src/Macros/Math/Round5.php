<?php

namespace Lazerg\LaravelMacros\Macros\Math;

use Lazerg\LaravelMacros\Macros\Macro;

class Round5 implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (float|int $number): int {
            $floor_to_minimum_10 = floor($number / 10) * 10;

            $number -= $floor_to_minimum_10;

            if ($number < 2.5) {
                return $floor_to_minimum_10;
            } else if ($number >= 2.5 && $number < 7.5) {
                return $floor_to_minimum_10 + 5;
            } else {
                return $floor_to_minimum_10 + 10;
            }
        };
    }
}
