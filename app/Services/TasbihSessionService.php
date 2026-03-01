<?php

namespace App\Services;

use App\Models\TasbihSession;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\Translation\t;

class TasbihSessionService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function index()
    {

        $tasbih = TasbihSession::where("user_id", Auth::id())->with(['user', 'tasbihs'])->get();
        if ($tasbih) {
            return $tasbih;
        } else {
            throw new Exception("not fund the tasbih");
        }
    }
    public function store(array $data)
    {

        $data = TasbihSession::create([
            'user_id' => Auth::id(),
            'tasbih_id' => $data['tasbih_id'],
            'started_at' => now()->utc(),
            'duration_seconds' => 0,
        ]);

        return $data;
    }

    public function update(array $data, TasbihSession $tasbihsession)
    {
        if (!$tasbihsession->started_at) {
            throw new \Exception("Session hasn't started yet.");
        }

        // Carbon instances
        $startedAt = $tasbihsession->started_at->copy()->utc();
        $endedAt   = now()->utc();

        $totalDuration = $startedAt->diffInSeconds($endedAt, false);

        if ($totalDuration < 0) {
            $totalDuration = 0;
        }

        // نستخدم save بدلاً من update() لتفادي تعديل started_at بالخطأ
        $tasbihsession->ended_at = $endedAt;
        $tasbihsession->duration_seconds = $totalDuration;
        $tasbihsession->save();

        return $tasbihsession->fresh();
    }
}
