<?php

namespace Lazerg\LaravelMacros\Facades;

use Ballen\Distical\Calculator as DistanceCalculator;
use Ballen\Distical\Entities\LatLong;

class Calculator
{
    /**
     * Distance between two latitude-longitude coordinates
     *
     * @param float $fromLat
     * @param float $fromLng
     * @param float $toLat
     * @param float $toLng
     *
     * @return float
     */
    public function distanceBetween(float $fromLat, float $fromLng, float $toLat, float $toLng): float
    {
        $from = new LatLong($fromLat, $fromLng);
        $to = new LatLong($toLat, $toLng);

        $distance = new DistanceCalculator($from, $to);

        return $distance->get()->asMiles();
    }
}
