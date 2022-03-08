<?php

namespace Lazerg\LaravelMacros\Macros\File;

use Illuminate\Support\Facades\File;
use Lazerg\LaravelMacros\Macros\Macro;

class FromJson implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (string $pathOrContent): ?array {
            $content = File::exists($pathOrContent)
                ? File::get($pathOrContent)
                : $pathOrContent;

            return json_decode($content, true);
        };
    }
}
