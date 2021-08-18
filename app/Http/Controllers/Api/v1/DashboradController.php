<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContractCollection;
use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboradController extends Controller
{
    public function index() {
        return new ContractCollection(Auth::user()->contracts);
    }
}
