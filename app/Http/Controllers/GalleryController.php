<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{


    public function show()
    {
        $gallery = Gallery::all();
        return view('auth.show_gallery', compact('gallery'));
    }
    
    public function index()
    {
        $gallery = Gallery::all();
        return view('auth.gallery', compact('gallery'));
    }

    public function create()
    {
        return view('auth.create_gallery');
    }

    public function store(Request $request)
    {
        $gallery = new Gallery;
        $gallery->des_a = $request->input('des_a');
        $gallery->des_b = $request->input('des_b');


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/galleries/', $filename);
            $gallery->image = $filename;
        }
        $gallery->save();
        return redirect()->back()->with('status','Image Added Successfully');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('auth.edit_gallery', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->des_a = $request->input('des_a');
        $gallery->des_b = $request->input('des_b');

        if($request->hasfile('image'))
        {
            $destination = 'uploads/galleries/'.$gallery->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/galleries/', $filename);
            $gallery->image = $filename;
        }

        $gallery->update();
        return redirect()->back()->with('status','Image Updated Successfully');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $destination = 'uploads/galleries/'.$gallery->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $gallery->delete();
        return redirect()->back()->with('status','Image Deleted Successfully');
    }

    

}