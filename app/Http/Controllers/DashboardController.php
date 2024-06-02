<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Models\Member;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function addNews()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('be.pages.addnews', compact( 'tags', 'categories'));
    }
    public function saveNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news,slug',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            'category_id' =>  'required',
            'set_published_at' => 'required|date',
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
        $validatedData['set_published_at'] = $request->input('set_published_at');
        $validatedData['category_id'] = $request->input('category_id');
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
    public function listNews()
    {
        $posts = Post::all();
        return view('be.pages.listNews', compact('posts'));
    }
    public function deleteNews(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // Delete the post
        $post->delete();

        return redirect()->back()->with('success', 'News post deleted successfully!');
    }

    //Partners
    public function addPartners()
    {
        // $tags = Tag::all();
        // $categories = Category::all();
        return view('be.pages.addPartners');
    }
    public function savePartners(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);
        

        // Handle image upload (if provided)
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('partners/images'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'partners/images/' . $imageName; // Update data with image path relative to public directory
        }

        $validatedData['name'] = $request->input('name');

        Partner::create($validatedData);
        // If an image was uploaded, store it in the database and assign its filename to the `image` field of the blog post object

        // If an image was uploaded, store it in the database and assign its filename to the `image` field
        // if (isset($image)) {
        //     $imagePath = $image->storeAs('/uploads/images/partners', $imageName, 'public');
        //     $partners->update(['image' => $imagePath]);
        // }
        try {
            

            // Success logic here
            return redirect()->back()->with('success', 'Partners created successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to create partners: ' . $e->getMessage());
        }
        
    }
    public function listPartners()
    {
        $partners = Partner::all();
        return view('be.pages.listPartner', compact('partners'));
    }
    public function deletePartners(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        // Delete the post
        $partner->delete();

        return redirect()->back()->with('success', 'Partner post deleted successfully!');
    }

    //Members
    public function addMembers()
    {
        // $members = Member::all();
        // $categories = Category::all();
        return view('be.pages.addMembers');
    }
    public function saveMembers(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|in:Board Member,Member',  // Allowed categories
        ]);

        $validatedData = $request->only(['name', 'position', 'description', 'category']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('members/images'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'members/images/' . $imageName; // Update data with image path relative to public directory
        }

        try {
            Member::create($validatedData);

            // Success logic here
            return redirect()->back()->with('success', 'Member created successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to create member: ' . $e->getMessage());
        }
    }

    public function listMembers()
    {
        $members = Member::all();
        return view('be.pages.listMembers', compact('members'));
    }
    public function deleteMembers(Request $request, $id)
    {
        $members = Member::findOrFail($id);

        // Delete the post
        $members->delete();

        return redirect()->back()->with('success', 'Member post deleted successfully!');
    }
}
