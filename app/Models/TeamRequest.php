<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamRequest extends Model
{
    use HasFactory, SoftDeletes;

    public function team() {
        return $this->hasOne(Team::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
