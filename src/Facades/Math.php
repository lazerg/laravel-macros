<?php

namespace Lazerg\LaravelMacros\Facades;

use Illuminate\Support\Facades\Facade;
use Lazerg\LaravelMacros\Macros\Math\DistanceBetween;

/**
 * @method static float distanceBetween(float $fromLat, float $fromLng, float $toLat, float $toLng)
 * @see DistanceBetween::macro()
 */
class Math extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'math';
    }
}
