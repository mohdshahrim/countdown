<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.profile', [
            'user' => User::findOrFail()
        ]);
    }
}