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
        return function (float|int $number): float {
            return ceil($number / 5) * 5;
        };
    }
}
