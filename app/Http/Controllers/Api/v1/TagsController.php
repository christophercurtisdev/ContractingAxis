<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContractCollection;
use App\Models\Contract;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function contractsWithTags(Request $request) {
        $this->validate($request, [
            'tags' => 'required|array|min:1',
        ]);

        return new ContractCollection(Contract::withAnyTags($request->tags));
    }
}
