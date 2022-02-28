<?php

namespace Lazerg\LaravelMacros\Macros\File;

use Lazerg\LaravelMacros\Macros\Macro;

class FromBase64 implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (string $content): string {
            return base64_decode(explode(',', $content)[1]);
        };
    }
}
