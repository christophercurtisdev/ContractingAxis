<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Contract extends Model
{
    use HasFactory, HasTags;

    public function users() {
        return $this->belongsToMany(User::class, 'contract_user');
    }

    public function owner() {
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
