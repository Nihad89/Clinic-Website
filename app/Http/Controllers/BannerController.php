<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Notice;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    
    public function about_us()
    {
        return view('auth.about');
    }

    public function contact_us()
    {
        return view('auth.contact');
    }
    
    //THIS IS TEMPORARY CHANGE HERE FOR PACKAGE
    
    public function package()
    {
        $banner = Banner::all();
        return view('auth.package', compact('banner'));
    }    
    
   //THIS UPPER CODE IS TEMPORARY CHANGE HERE FOR PACKAGE



    public function show()
    {
        $banner = Banner::all();
        $notice = Notice::all();
        $doctor = Doctor::all();
        return view('auth.show_banner', compact('banner', 'notice', 'doctor'));
    }
    
    public function show_b()
    {
        $banner = Banner::all();
        $notice = Notice::all();
        $doctor = Doctor::all();
        return view('auth.b_sandhani', compact('banner', 'notice', 'doctor'));
    }


    public function index()
{
    $banner = Banner::all();

    return view('auth.banner', compact('banner'));
}


    public function create()
    {
        return view('auth.create_banner');
    }

    public function store(Request $request)
    {
        $banner = new Banner;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/banners/', $filename);
            $banner->image = $filename;
        }
        $banner->save();
        return redirect()->back()->with('status','Picture Added Successfully');
    }

    public function destroy($id)
    {
        $banner = Banner::find($id);
        $destination = 'uploads/banners/'.$banner->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $banner->delete();
        return redirect()->back()->with('status','Picture Deleted Successfully');
    }
}
