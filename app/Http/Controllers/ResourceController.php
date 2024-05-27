<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use App\Http\Requests\StoreResourceRequest;
use App\Http\Requests\UpdateResourceRequest;

class ResourceController extends Controller
{

    public function addResources() {
        $resourceItems = Resource::all();
        // $categories = Category::all();
        return view('be.pages.addResources', compact('resourceItems'));
    }

    public function saveResources(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file_path' => 'required|file|mimes:pdf|max:2048',
            'category' => 'required|in:WAEF,Election,Government',  // Allowed categories
        ]);
        // dd($request);

        $validatedData = $request->only(['title', 'description', 'category']);

        if ($request->hasFile('file_path') && $request->file('file_path')->isValid()) {
            $image = $request->file('file_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('resources/documents'), $imageName); // Move the image to the desired directory
            $validatedData['file_path'] = 'resources/documents/' . $imageName; // Update data with image path relative to public directory
        }
        // dd($validatedData);

        Resource::create($validatedData);

        try {

            // Success logic here
            return redirect()->back()->with('success', 'Resource added successfully!');
        } catch (\Exception $e) {
            // Handle database error or any other exceptions
            return redirect()->back()->with('error', 'Failed to add Image: ' . $e->getMessage());
        }
    }

    // public function listImages()
    // {
    //     $images = Image::all();
    //     return view('be.pages.listImages', compact('images'));
    // }
    // public function deleteImages(Request $request, $id)
    // {
    //     $members = Image::findOrFail($id);

    //     // Delete the post
    //     $members->delete();

    //     return redirect()->back()->with('success', 'Image post deleted successfully from gallery!');
    // }

    /**
     * Display a listing of the resource.
     */
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
    public function store(StoreResourceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResourceRequest $request, Resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        //
    }
}
