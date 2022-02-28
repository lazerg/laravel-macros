<?php

namespace Lazerg\LaravelMacros\Macros\Request;

use Illuminate\Http\Request;
use Lazerg\LaravelMacros\Macros\Macro;

class WhenEquals implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (string $key, mixed $value, callable $callback, ?callable $otherwise = null): Request {
            /** @type Request $this */
            $actualValue = $this->get($key);

            if ($actualValue == $value) {
                $callback($actualValue);
            } else if ($otherwise) {
                $otherwise($actualValue);
            }

            return $this;
        };
    }
}
