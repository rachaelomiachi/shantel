<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file_path' => 'required|mimes:jpg,png,jpeg|max:5045',

        ]);
        //    $newImageName = time() . '-'. $request->name . '.' .
        //     $request->image->extension();

        //    $request->image->move(public_path('images'), $newImageName);



        $imagePath = $request->file('file_path')->store('images', 'public');
        // dd($imagePath);
        $blog = Blog::create([
            'title' => $request->title,
        'description' => $request->description,

            'image_path' => $imagePath,
            'user_id' => auth()->id()
        ]);

      
           return redirect('blog.show');

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {        
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}