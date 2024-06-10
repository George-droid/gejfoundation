<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ImageCollection;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function addImages()
    {
        // $members = Member::all();
        $collections = ImageCollection::all();
        return view('be.pages.addImages', compact('collections'));
    }
    public function saveImages(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'collection_id' => 'required',  // Allowed categories
        ]);
        // dd($request);

        $validatedData = $request->only(['title', 'description', 'collection_id']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gallery/images'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'gallery/images/' . $imageName; // Update data with image path relative to public directory
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
    public function editImages($id)
    {
        $images = Image::findOrFail($id);
        $collections = ImageCollection::all();

        return view('be.pages.editImages', compact('images', 'collections'));
    }
    public function updateImages(Request $request, $id)
    {
        $images = Image::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
            'collection_id' => 'required', 
        ]);

        // $validatedData = $request->only(['name', 'position', 'description', 'category']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gallery/images'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'gallery/images/' . $imageName; // Update data with image path relative to public directory
        }

        $validatedData['title'] = $request->input('title');
        $validatedData['description'] = $request->input('description');
        $validatedData['collection_id'] = $request->input('collection_id');

        $images->update($validatedData);

        try {
            

            // Success logic here
            return redirect()->back()->with('success', 'Image collection Updated successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to create member: ' . $e->getMessage());
        }
    }
    public function getImages($collectionId)
    {
        $images = Image::where('collection_id', $collectionId)->get();
        return response()->json($images);
    }


    public function addImageCollections()
    {
        // $members = Member::all();
        // $collections = ImageCollection::all();
        return view('be.pages.addImageCollections');
    }
    public function saveImageCollections(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // dd($request);

        $validatedData = $request->only(['title', 'description']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gallery/collections'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'gallery/collections/' . $imageName; // Update data with image path relative to public directory
        }
        // dd($validatedData);

        ImageCollection::create($validatedData);

        try {

            // Success logic here
            return redirect()->back()->with('success', 'Images collection added successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to add collection: ' . $e->getMessage());
        }
    }
    public function listImageCollections()
    {
        $collections = ImageCollection::all();
        return view('be.pages.listImageCollections', compact('collections'));
    }
    public function deleteImageCollections(Request $request, $id)
    {
        $collections = ImageCollection::findOrFail($id);

        // Delete the post
        $collections->delete();

        return redirect()->back()->with('success', 'Image category deleted successfully!');
    }
    public function editImageCollections($id)
    {
        $collections = ImageCollection::findOrFail($id);
        return view('be.pages.editImageCollections', compact('collections'));
    }
    public function updateImageCollections(Request $request, $id)
    {
        $collections = ImageCollection::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // $validatedData = $request->only(['name', 'position', 'description', 'category']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gallery/collections'), $imageName); // Move the image to the desired directory
            $validatedData['image'] = 'gallery/collections/' . $imageName; // Update data with image path relative to public directory
        }

        $validatedData['title'] = $request->input('title');
        $validatedData['description'] = $request->input('description');

        $collections->update($validatedData);

        try {
            

            // Success logic here
            return redirect()->back()->with('success', 'Image collection Updated successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to create member: ' . $e->getMessage());
        }
    }
}
