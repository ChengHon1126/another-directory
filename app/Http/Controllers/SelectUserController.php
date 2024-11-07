<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectUserController extends Controller
{
    public function index()
    {
        // $user = new User();
        // dump(User::all());
        return view('home', [
            'ideas' => User::orderBy('created_at', 'DESC')->get('name')
        ]);
    }
}
