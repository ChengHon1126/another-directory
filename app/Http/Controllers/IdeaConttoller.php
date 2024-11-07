<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IdeaConttoller extends Controller
{
    public function store()
    {
        // dump(request()->get('account'));
        $user = User::create([
            'name' => request()->get('account'),
            'email' => request()->get('email'),
            'password' => request()->get('password')
        ]);

        return redirect()->route('user')->with('success', '恭喜你成功INSERT!!!!!');
    }
}
