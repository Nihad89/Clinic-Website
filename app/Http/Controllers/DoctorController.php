<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class DoctorController extends Controller
{
   
    public function show()
    {
        $doctor = Doctor::all();
        return view('auth.show_doctor', compact('doctor'));
    }
    
    public function index()
    {
        $doctor = Doctor::all();
        return view('auth.doctor', compact('doctor'));
    }

    public function create()
    {
        return view('auth.create_doctor');
    }

    public function store(Request $request)
    {
        $doctor = new Doctor;
        $doctor->name = $request->input('name');
        $doctor->specialty = $request->input('specialty');
        $doctor->degree = $request->input('degree');
        $doctor->symptom = $request->input('symptom');
        $doctor->day = $request->input('day');
        $doctor->time = $request->input('time');
        $doctor->phone = $request->input('phone');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/doctors/', $filename);
            $doctor->image = $filename;
        }
        $doctor->save();
        return redirect()->back()->with('status','Doctor Added Successfully');
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('auth.edit_doctor', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->name = $request->input('name');
        $doctor->specialty = $request->input('specialty');
        $doctor->degree = $request->input('degree');
        $doctor->symptom = $request->input('symptom');
        $doctor->day = $request->input('day');
        $doctor->time = $request->input('time');
        $doctor->phone = $request->input('phone');
        if($request->hasfile('image'))
        {
            $destination = 'uploads/doctors/'.$doctor->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/doctors/', $filename);
            $doctor->image = $filename;
        }

        $doctor->update();
        return redirect()->back()->with('status','Doctor Updated Successfully');
    }

    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $destination = 'uploads/doctors/'.$doctor->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $doctor->delete();
        return redirect()->back()->with('status','Doctor Deleted Successfully');
    }

}