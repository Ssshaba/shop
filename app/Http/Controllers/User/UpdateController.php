<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $date = $request->validated();
        $user->update($date);

         return view('user.show', compact('user'));
    }
}
