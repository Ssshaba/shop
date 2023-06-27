<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Group;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Group $group)
    {
        return view('group.edit', compact('group'));
    }
}
