<?php

namespace Lazerg\LaravelMacros\Macros;

interface Macro
{
    /**
     * The macro function must return callable which be used
     * while calling this macro
     *
     * @return callable
     */
    public function macro(): callable;
}
