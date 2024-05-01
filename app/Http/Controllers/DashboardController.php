<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function addNews()
    {
        $tags = Tag::all();
        // $destinations = DB::table('news')->get();
        return view('be.pages.addnews', compact( 'tags'));
    }
    public function saveNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news,slug',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);
        

        // Handle image upload (if provided)
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('news/images'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'news/images/' . $imageName; // Update data with image path relative to public directory
        }

        $validatedData['title'] = $request->input('title');
        $validatedData['slug'] = $request->input('slug');
        $validatedData['excerpt'] = $request->input('excerpt');
        $validatedData['content'] = $request->input('content');
        // $validatedData['image'] $request->input('image') ? '/news/images/' . $imageName : null; 
        $validatedData['published_at'] = now();
        // dd($validatedData);

        $post = Post::create($validatedData);

        // Attach tags to the post
        if ($request->has('tags')) {
            $post->tags()->attach($request->input('tags'));
        }


        try {
            

            // Success logic here
            return redirect()->back()->with('success', 'News created successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to create news: ' . $e->getMessage());
        }

        
    }
}
