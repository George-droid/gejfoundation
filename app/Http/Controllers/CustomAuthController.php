<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function security()
    {
        return view('security');
    }
    public function empowerment()
    {
        return view('empowerment');
    }
    public function contact()
    {
        return view('contact');
    }
    public function waef()
    {
        return view('waef');
    }
    public function waefmembers()
    {
        return view('waefmembers');
    }
    public function waefworks()
    {
        return view('waefworks');
    }
    public function gejgallery()
    {
        return view('gejgallery');
    }
    public function adminLogin()
    {
        return view('be.auth.login');
    }
    public function customLogin(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            //dd(Auth::user()->role);
            return redirect()->route('dashboard')->withSuccess('Signed in');
        }
        
        return redirect("login")->withErrors('Login details are not valid');
    }
    public function dashboard()
    {
        return view('be.pages.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login'); // Redirect to login page
    }
}
