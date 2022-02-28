<?php

namespace Lazerg\LaravelMacros\Macros\File;

use Illuminate\Support\Facades\File;
use Lazerg\LaravelMacros\Macros\Macro;

class ToBase64 implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (string $path): string {
            $mime = File::mimeType($path);
            $content = base64_encode(File::get($path));

            return sprintf("data:%s;base64,%s", $mime, $content);
        };
    }
}
