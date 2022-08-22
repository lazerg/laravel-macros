<?php

namespace Lazerg\LaravelMacros\Macros\Str;

use Illuminate\Support\Str;
use Lazerg\LaravelMacros\Macros\Macro;

class PluralWithNumber implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (string $subject, int $number) {
            return $number . " " . Str::plural($subject, $number);
        };
    }
}
