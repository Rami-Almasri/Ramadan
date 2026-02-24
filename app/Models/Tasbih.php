<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasbih extends Model
{
    /** @use HasFactory<\Database\Factories\TasbihFactory> */
    use HasFactory;
    protected $fillable = ['title', 'reward', 'count_recommended'];
}
