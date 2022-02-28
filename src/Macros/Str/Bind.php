<?php

namespace Lazerg\LaravelMacros\Macros\Str;

use Illuminate\Support\Str;
use Lazerg\LaravelMacros\Macros\Macro;

class Bind implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (string $subject, array $bindings) {
            foreach ($bindings as $binding => $value) {
                $subject = Str::replace(":$binding", $value, $subject);
            }

            return $subject;
        };
    }
}
