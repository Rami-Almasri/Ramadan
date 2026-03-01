<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PrayerService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function getPrayerTimes($lat, $long)
    {
        return Http::get('https://api.aladhan.com/v1/timings', [
            'latitude' => $lat,
            'longitude' => $long,
            'method' => 3,
        ]);
    }
}
