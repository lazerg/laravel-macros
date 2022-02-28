<?php

namespace Lazerg\LaravelMacros\Macros\File;

use Lazerg\LaravelMacros\Macros\Macro;
use Illuminate\Support\Str;

class GenerateName implements Macro

    /**
     * @inheritDoc
     */{
    public function macro(): callable
    {
        return function (string $extension): string {
            $name = Str::random(25);
            $extension = trim($extension, '.');

            return $name . '.' . $extension;
        };
    }
}
