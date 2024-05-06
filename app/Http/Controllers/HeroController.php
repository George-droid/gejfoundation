<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHeroRequest;
use App\Http\Requests\UpdateHeroRequest;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function addHero()
     {
         $heroSection = Hero::all();
         // $categories = Category::all();
         return view('be.pages.addHero', compact('heroSection'));
     }
     public function saveHero(Request $request)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'subtitle' => 'required|string|max:255',
             'cta' => 'required|string',
             'cta_link' => 'required|string',
             'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
         ]);
 
         $validatedData = $request->only(['title', 'subtitle', 'cta', 'cta_link']);
 
         if ($request->hasFile('image') && $request->file('image')->isValid()) {
             $image = $request->file('image');
             $imageName = time() . '.' . $image->getClientOriginalExtension();
             $image->move(public_path('hero/images'), $imageName); // Move the image to the desired directory
             $validatedData['image'] = 'hero/images/' . $imageName; // Update data with image path relative to public directory
         }

         Hero::create($validatedData);
 
         try {
 
             // Success logic here
             return redirect()->back()->with('success', 'Hero item created successfully!');
         } catch (\Exception $e) {
             // Handle database error or any other exceptions
             return redirect()->back()->with('error', 'Failed to create hero item: ' . $e->getMessage());
         }
     }
 
     public function listHero()
     {
         $members = Hero::all();
         return view('be.pages.listMembers', compact('members'));
     }
     public function deleteMembers(Request $request, $id)
     {
         $members = Hero::findOrFail($id);
 
         // Delete the post
         $members->delete();
 
         return redirect()->back()->with('success', 'Member post deleted successfully!');
     }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
