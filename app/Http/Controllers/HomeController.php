<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutpage()
    {
        return view('frontend.about');
    }

    public function homepage()
    {
        return view('frontend.home');
    }
    
    public function servicepage()
    {
        return view('frontend.service');
    }
    

}
