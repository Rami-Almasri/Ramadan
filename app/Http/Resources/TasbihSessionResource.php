<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TasbihSessionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'tasbih_id' => $this->tasbih_id,

            'started_at' => $this->started_at?->toISOString(),
            'ended_at'   => $this->ended_at?->toISOString(),
            'duration_seconds' => $this->duration_seconds ?? 0,
            'duration_formatted' => gmdate('H:i:s', $this->duration_seconds ?? 0), // HH:MM:SS
        ];
    }
}
