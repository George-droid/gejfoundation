<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function services()
    {
        return view('service');
    }
    public function contact()
    {
        return view('contact');
    }
    public function waef()
    {
        return view('waef');
    }
    
}
