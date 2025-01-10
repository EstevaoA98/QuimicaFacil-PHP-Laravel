<?php

namespace App\Http\Controllers;

use App\Models\Home;

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
}
