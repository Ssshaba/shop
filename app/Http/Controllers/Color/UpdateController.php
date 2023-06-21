<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Color;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Color $color)
    {
        $date = $request->validated();
        $color->update($date);

         return view('color.show', compact('color'));
    }
}
