<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchGame extends Model
{
    use HasFactory;

    protected $casts = [
        'date_time' => 'date'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
