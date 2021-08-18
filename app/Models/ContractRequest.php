<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractRequest extends Model
{
    use HasFactory;

    public function contract() {
        return $this->hasOne(Contract::class);
    }

    public function user() {
        return $this->hasOn(Contract::class);
    }
}
