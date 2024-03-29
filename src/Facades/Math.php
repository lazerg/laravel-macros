<?php

namespace Lazerg\LaravelMacros\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static float distanceBetween(float $fromLat, float $fromLng, float $toLat, float $toLng)
 * @method static int round5(float|int $number)
 *
 * @mixin \Lazerg\LaravelMacros\Services\Math
 */
class Math extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'math';
    }
}
