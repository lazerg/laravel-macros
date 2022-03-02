<?php

namespace Lazerg\LaravelMacros\Macros\Math;

use Ballen\Distical\Calculator as DistanceCalculator;
use Ballen\Distical\Entities\LatLong;
use Lazerg\LaravelMacros\Macros\Macro;

class DistanceBetween implements Macro
{
    /**
     * @inheritDoc
     */
    public function macro(): callable
    {
        return function (float $fromLat, float $fromLng, float $toLat, float $toLng): float {
            $from = new LatLong($fromLat, $fromLng);
            $to = new LatLong($toLat, $toLng);

            $distance = new DistanceCalculator($from, $to);

            return $distance->get()->asMiles();
        };
    }
}
