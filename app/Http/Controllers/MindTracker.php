<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MindTracker extends Controller
{
    
    public function myHome()
    {
        return view('frontend.home');
    }
    public function about()
    {
        return view('frontend.about1');
    }

    public function page()
    {
        return view('frontend.pages');
    }

    public function blog()
    {
        return view('frontend.blogs');
    }


    public function contact()
    {
        return view('frontend.contact');
    }

    public function services()
    {
        return view('frontend.service');
    }

    
}


