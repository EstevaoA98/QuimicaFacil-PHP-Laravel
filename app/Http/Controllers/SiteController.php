<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Client\Request;

class SiteController extends Controller
{
    public function home(){

        $home=home::where('id', 1)->first();
        //dd{{($home)}}
        return view("site.home", ['home' => $home]);
    }

    public function collaborate()
    {
        return view('site.collaborate');
    }

    public function send(Request $resquest)
    {
        $resquest->validate([
            'name' => 'required|max: 255',
            'email' => 'required|max: 255',
            'subject'=> 'required|max: 255',
            'massage' => 'required|max: 255',
            'phone' => 'phone',
        ]);
    }
}
