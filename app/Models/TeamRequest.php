<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamRequest extends Model
{
    use HasFactory;

    public function team() {
        return $this->hasOne(Team::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
