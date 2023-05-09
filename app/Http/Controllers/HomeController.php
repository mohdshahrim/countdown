<?php

namespace App\Http\Controllers;

//use App\Models\User;
use App\Models\Countdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        //$countdowns = Countdown::all();

        $userid = Auth::id();
        $countdowns = Countdown::where('userid', $userid)->get();
        return view('dashboard', ['countdowns' => $countdowns]);
    }


    public function store(Request $request)
    {
        Countdown::create([
            'userid' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'datetime' => $request->datetime,
            'urlsuffix' => $this->generateURL()
        ]);
        
        return redirect('/dashboard');
    }

    // this function should be modified because anonymous
    // user can delete anyone's record
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
            return "hmmm, no countdown found";
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