<?php

namespace App\Http\Controllers;

use App\Models\NewsHighlight;
use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Models\Member;
use App\Models\MemberCategory;
use App\Models\NewsHouse;
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
            'published_at' => 'required|date',
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
        $validatedData['published_at'] = $request->input('published_at');
        // $validatedData['set_published_at'] = $request->input('set_published_at');
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
    public function editNews($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        $categories = Category::all();
        return view('be.pages.editNews', compact('post', 'tags', 'categories'));
    }
    public function updateNews(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news,slug,' . $id,
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'image' => 'sometimes|file|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            'category_id' => 'required',
            'published_at' => 'nullable|date',
        ]);

        $validatedData = $request->except(['_token', '_method']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('news/images'), $imageName); // Move the image to the desired director
            $validatedData['image'] = 'news/images/' . $imageName; // Update data with image path relative to public directory
        }

        $post->update($validatedData);

        return redirect()->back()->with('success', 'News updated successfully!');
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
        $categories = MemberCategory::all();
        return view('be.pages.addMembers', compact('categories'));
    }
    public function saveMembers(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',  // Allowed categories
        ]);

        // $validatedData = $request->only(['name', 'position', 'description', 'category']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('members/images'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'members/images/' . $imageName; // Update data with image path relative to public directory
        }

        $validatedData['name'] = $request->input('name');
        $validatedData['position'] = $request->input('position');
        $validatedData['description'] = $request->input('description');
        $validatedData['category_id'] = $request->input('category_id');
        // $validatedData['category_id'] = $request->input('category_id');

        Member::create($validatedData);

        try {
            

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
    public function editMembers($id)
    {
        $members = Member::findOrFail($id);
        // $tags = Tag::all();
        $categories = MemberCategory::all();
        return view('be.pages.editMembers', compact('members', 'categories'));
    }
    public function updateMembers(Request $request, $id)
    {
        $members = Member::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'description' => 'required|string',
            'image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',  // Allowed categories
        ]);

        // $validatedData = $request->only(['name', 'position', 'description', 'category']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('members/images'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'members/images/' . $imageName; // Update data with image path relative to public directory
        }

        $validatedData['name'] = $request->input('name');
        $validatedData['position'] = $request->input('position');
        $validatedData['description'] = $request->input('description');
        $validatedData['category_id'] = $request->input('category_id');

        $members->update($validatedData);

        try {
            

            // Success logic here
            return redirect()->back()->with('success', 'Member created successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to create member: ' . $e->getMessage());
        }
    }

    // News Highlights
    public function addNewsHighlights()
    {
        // $members = Member::all();
        $houses = NewsHouse::all();
        return view('be.pages.addNewsHighlights', compact('houses'));
    }
    public function saveNewsHighlights(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'cta' => 'required|string',
            'cta_link' => 'required|string',
            // 'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'house_id' => 'required',  // Allowed categories
        ]);

        $validatedData['title'] = $request->input('title');
        $validatedData['excerpt'] = $request->input('excerpt');
        $validatedData['cta'] = $request->input('cta');
        $validatedData['cta_link'] = $request->input('cta_link');
        $validatedData['house_id'] = $request->input('house_id');

        NewsHighlight::create($validatedData);

        try {
            

            // Success logic here
            return redirect()->back()->with('success', 'Member created successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to create highlight: ' . $e->getMessage());
        }
    }
    public function listNewsHighlights()
    {
        $highlights = NewsHighlight::all();
        return view('be.pages.listNewsHighlights', compact('highlights'));
    }
    public function deleteNewsHighlights(Request $request, $id)
    {
        $highlights = NewsHighlight::findOrFail($id);

        // Delete the post
        $highlights->delete();

        return redirect()->back()->with('success', 'News Highlight deleted successfully!');
    }
    public function editNewsHighlights($id)
    {
        $highlights = NewsHighlight::findOrFail($id);
        // $tags = Tag::all();
        $houses = NewsHouse::all();
        return view('be.pages.editNewsHighlights', compact('highlights', 'houses'));
    }
    public function updateNewsHighlights(Request $request, $id)
    {
        $highlights = NewsHighlight::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'cta' => 'required|string',
            'cta_link' => 'required|string',
            // 'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'house_id' => 'required',  // Allowed categories
        ]);

        // $validatedData = $request->only(['name', 'position', 'description', 'category']);

        // if ($request->hasFile('image') && $request->file('image')->isValid()) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('members/images'), $imageName); // Move the image to the desired directory
        //     $validatedData['image'] = 'members/images/' . $imageName; // Update data with image path relative to public directory
        // }

        $validatedData['title'] = $request->input('title');
        $validatedData['excerpt'] = $request->input('excerpt');
        $validatedData['cta'] = $request->input('cta');
        $validatedData['cta_link'] = $request->input('cta_link');
        $validatedData['house_id'] = $request->input('house_id');

        $highlights->update($validatedData);

        try {
            // Success logic here
            return redirect()->back()->with('success', 'Highlight updated successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to update highlight: ' . $e->getMessage());
        }
    }


    //Members
    public function addNewsHouses()
    {
        // $houses = NewsHouse::all();
        return view('be.pages.addNewsHouses');
    }

    public function saveNewsHouses(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $validatedData['name'] = $request->input('name');

        NewsHouse::create($validatedData);

        try {
            

            // Success logic here
            return redirect()->back()->with('success', 'News House created successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to create news house: ' . $e->getMessage());
        }
    }

    public function listNewsHouses()
    {
        $houses = NewsHouse::all();
        return view('be.pages.listNewsHouses', compact('houses'));
    }
    public function deleteNewsHouses(Request $request, $id)
    {
        $houses = NewsHouse::findOrFail($id);

        // Delete the post
        $houses->delete();

        return redirect()->back()->with('success', 'News Highlight deleted successfully!');
    }
    public function editNewsHouses($id)
    {
        $houses = NewsHouse::findOrFail($id);
        // $tags = Tag::all();
        // $houses = NewsHouse::all();
        return view('be.pages.editNewsHouses', compact('houses'));
    }
    public function updateNewsHouses(Request $request, $id)
    {
        $houses = NewsHouse::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $validatedData['name'] = $request->input('name');

        $houses->update($validatedData);

        try {
            // Success logic here
            return redirect()->back()->with('success', 'Highlight updated successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to update highlight: ' . $e->getMessage());
        }
    }
}
