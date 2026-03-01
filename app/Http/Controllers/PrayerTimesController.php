<?php

namespace App\Http\Controllers;

use App\Services\PrayerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class PrayerTimesController extends Controller
{
    private $prayerService;
    public function __construct(PrayerService $prayerService)
    {
        $this->prayerService = $prayerService;
    }

    public function getPrayerTimes($lat, $long)
    {
        $response  = $this->prayerService->getPrayerTimes($lat, $long);


        if ($response->failed()) {
            throw new \Exception('Failed to fetch prayer times');
        }

        return response()->json([
            'data' => $response->json()['data']['timings']
        ]);
    }
}
