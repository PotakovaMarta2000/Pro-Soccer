<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    
    }
        protected $casts = [
        'birth_date' => 'date',
        'start_date' => 'date'
    ];
}

