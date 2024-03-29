<?php

namespace Lazerg\LaravelMacros\Macros\Arr;

use Lazerg\LaravelMacros\Macros\Macro;

class RenameKeys implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (array $haystack, array $changes): array {
            foreach ($changes as $oldKeyName => $newKeyName) {
                $haystack[$newKeyName] = $haystack[$oldKeyName];
                unset($haystack[$oldKeyName]);
            }

            return $haystack;
        };
    }
}
