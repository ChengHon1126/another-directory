<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $idea = new Ideas();
        $idea->person = 'test';
        $idea->like = 2;
        $idea->save();

        return view('home');
    }

    public function insert() {}
}
