<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Countdown;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $countdowns = Countdown::all();
        return view('dashboard', ['countdowns' => $countdowns]);
    }

    public function store(Request $request)
    {
        // Validate the request...

        $countdown = new Countdown();
        $countdown->title = $request->title;
        $countdown->save();
    }
}