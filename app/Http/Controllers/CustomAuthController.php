<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Member;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function home()
    {
        $newsItems = Post::orderBy('published_at', 'desc')->take(3)->get();
        return view('home', compact('newsItems'));
    }
    public function about()
    {
        $members = Member::where('category_id', 2)->orderBy('created_at', 'desc')->get();
        return view('about', compact('members'));
    }
    public function blog(Request $request)
    {
        $query = Post::query();

        if ($request->has('tag')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('name', $request->tag);
            });
        }

        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('name', $request->category);
            });
        }
        $newsItems = Post::orderBy('published_at', 'desc')->paginate(6);
        $tags = Tag::all();
        $categories = Category::all();
        return view('blog', compact('newsItems', 'tags', 'categories'));
    }
    public function blogpage($slug)
    {
        $news = Post::where('slug', $slug)->firstOrFail();
        return view('blogpage', compact('news'));
    }
    public function gejresources()
    {
        return view('gejresources');
    }
    public function services()
    {
        $newsItems = Post::where('category_id', 1)->orderBy('published_at', 'desc')->get();
        return view('service', compact('newsItems'));
    }
    public function security()
    {
        $newsItems = Post::where('category_id', 2)->orderBy('published_at', 'desc')->get();
        return view('security', compact('newsItems'));
    }
    public function empowerment()
    {
        $newsItems = Post::where('category_id', 3)->orderBy('published_at', 'desc')->get();
        return view('empowerment', compact('newsItems'));
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
        $members = Member::where('category_id', 3)->orderBy('created_at', 'desc')->paginate(6);
        return view('waefmembers', compact('members'));
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
