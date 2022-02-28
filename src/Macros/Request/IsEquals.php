<?php

namespace Lazerg\LaravelMacros\Macros\Request;

use Illuminate\Http\Request;
use Lazerg\LaravelMacros\Macros\Macro;

class IsEquals implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (string $key, mixed $value, callable $callback, ?callable $otherwise = null): bool {
            /** @type Request $this */
            return $this->get($key) === $value;
        };
    }
}
