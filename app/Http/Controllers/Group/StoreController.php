<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use App\Models\Group;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Group::firstOrCreate($data);

        return redirect()->route('group.index');
    }
}

