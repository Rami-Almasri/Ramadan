<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasbihSession extends Model
{
    /** @use HasFactory<\Database\Factories\TasbihSessionFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tasbih_id',
        'started_at',
        'ended_at',
        'duration_seconds',
    ];

    public function tasbih()
    {
        return $this->belongsTo(Tasbih::class, 'tasbih_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
