<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function addImages()
    {
        // $members = Member::all();
        // $categories = Category::all();
        return view('be.pages.addImages');
    }
    public function saveImages(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'path' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|in:WAEF,Election,Government',  // Allowed categories
        ]);
        // dd($request);

        $validatedData = $request->only(['title', 'description', 'category']);

        if ($request->hasFile('path') && $request->file('path')->isValid()) {
            $image = $request->file('path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gallery/images'), $imageName); // Move the image to the desired directory
            $validatedData['path'] = 'gallery/images/' . $imageName; // Update data with image path relative to public directory
        }
        // dd($validatedData);

        Image::create($validatedData);

        try {

            // Success logic here
            return redirect()->back()->with('success', 'Images added successfully to gallery!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to add Image: ' . $e->getMessage());
        }
    }

    public function listImages()
    {
        $images = Image::all();
        return view('be.pages.listImages', compact('images'));
    }
    public function deleteImages(Request $request, $id)
    {
        $members = Image::findOrFail($id);

        // Delete the post
        $members->delete();

        return redirect()->back()->with('success', 'Image post deleted successfully from gallery!');
    }
}
