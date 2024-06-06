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
         $heroItems = Hero::all();
         // $categories = Category::all();
         return view('be.pages.addHero', compact('heroItems'));
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
         $heroItems = Hero::all();
         return view('be.pages.listhero', compact('heroItems'));
     }
     public function deleteHero(Request $request, $id)
     {
         $heroItems = Hero::findOrFail($id);
 
         // Delete the post
         $heroItems->delete();
 
         return redirect()->back()->with('success', 'Member post deleted successfully!');
     }
     public function editHero($id)
     {
        $heroItems = Hero::findOrFail($id);
        return view('be.pages.editHero', compact('heroItems'));
     }
     public function updateHero(Request $request, $id)
     {
        $hero = Hero::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'cta' => 'required|string',
            'cta_link' => 'required|string',
            'image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validatedData = $request->only(['title', 'subtitle', 'cta', 'cta_link']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('hero/images'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'hero/images/' . $imageName; // Update data with image path relative to public directory
        }

        $hero->update($validatedData);

        try {

            // Success logic here
            return redirect()->back()->with('success', 'Hero item created successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to create hero item: ' . $e->getMessage());
        }
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
