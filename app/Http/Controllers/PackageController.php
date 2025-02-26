<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PackageController extends Controller
{
    public function show()
    {
        $package = Package::all();
        return view('auth.show_package', compact('package'));
    }
    
    public function index()
    {
        $package = Package::all();
        return view('auth.package', compact('package'));
    }

    public function create()
    {
        return view('auth.create_package');
    }

    public function store(Request $request)
    {
        $package = new Package;
        $package->des_a = $request->input('des_a');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/packages/', $filename);
            $package->image = $filename;
        }
        $package->save();
        return redirect()->back()->with('status','Package Added Successfully');
    }

    public function destroy($id)
    {
        $package = Package::find($id);
        $destination = 'uploads/packages/'.$package->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $package->delete();
        return redirect()->back()->with('status','Package Deleted Successfully');
    }
}
