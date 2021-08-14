<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContractStatus extends Model
{
    use HasFactory, SoftDeletes;

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
