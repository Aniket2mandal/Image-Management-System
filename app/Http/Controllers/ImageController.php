<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{


    public function indexhome()
    {
        // $books = Book::with('category')->get();
        return view('home');
    }
    public function index()
    {
        // $books = Book::with('category')->get();
        return view('createimage');
    }

    public function show()
    {
        // $books=Book::with('category')->get();
        $image = Image::get();
        return view('imageview', compact('image'));
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'Title' => 'required|string|max:255',
            'Description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png|max:2048',
        ]);
        // dd($request->Description);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $image = new Image();
        $image->Title = $request->Title;
        $image->Description = $request->Description;
        if ($imageName) {
            $image->image = $imageName;
        }
        // $image->user_id=1;
        $image->save();


        return redirect()->route('home')->with('success', 'Image' . "\t" . $image->Title . "\t" . ' uploaded successfully');
    }


    public function edit()
    {

    }
    public function update()
    {

    }
    public function delete($id)
    {
        $image_del = Image::where('id', $id)->first();

        // Check if the category was found
        if ($image_del) {
            // If found, delete the category
            $image_del->delete();
            return redirect()->route('imageview')->with('success', 'Image' . "\t" . $image_del->Title . "\t" . ' deleted successfully!');
        } else {
            // If not found, redirect back with an error message
            return redirect()->route('imageview')->with('error', 'Image not found!');
        }
    }
}
