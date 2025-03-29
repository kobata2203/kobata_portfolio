<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }

    public function careear(Request $request)
    {
        return view('careear');
    }

    public function work(Request $request)
    {
        return view('work');
    }

    public function profile(Request $request)
    {
        return view('profile');
    }

    public function skillset(Request $request)
    {
        return view('skillset');
    }

    public function careearplan(Request $request)
    {
        return view('careearplan');
    }
}
