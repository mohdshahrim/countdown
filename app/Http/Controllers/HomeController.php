<?php

namespace App\Http\Controllers;

//use App\Models\User;
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
        Countdown::create([
            'userid' => $request->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'datetime' => $request->datetime,
            'urlsuffix' => $this->generateURL()
        ]);
        
        return redirect('/dashboard');
    }


    public function destroy($id)
    {
        $countdown = Countdown::where('id', $id)->firstorfail()->delete();
        return redirect('/dashboard');
    }


    // function to display countdowns
    public function display($url)
    {
        $countdowns = Countdown::where('urlsuffix', $url)->first();
        if ($countdowns) {
            return view('countdown', ['countdowns'=>$countdowns]);
        }
        else {
            return "hmmm";
        }
    }


    private function generateURL()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $result = '';
        for ($i = 0; $i < 11; $i++) {
            $result .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $result;
    }

}