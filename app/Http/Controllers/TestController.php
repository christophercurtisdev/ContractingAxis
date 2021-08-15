<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test() {
        return User::withAnyTags(['PHP'])->get();
    }
}
