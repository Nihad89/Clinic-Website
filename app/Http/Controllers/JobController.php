<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Fcades\File;


class JobController extends Controller
{
    public function show()
    {
        $job = Job::all();
        return view('auth.show_job', compact('job'));
    }
    
    public function index()
    {
        $job = Job::all();
        return view('auth.job', compact('job'));
    }

    public function create()
    {
        return view('auth.create_job');
    }

    public function store(Request $request)
    {
        $job = new Job;
        $job->position = $request->input('position');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->experience = $request->input('experience');
        $job->requirement = $request->input('requirement');
        $job->hour = $request->input('hour');
        $job->salary = $request->input('salary');
        $job->email = $request->input('email');
        $job->date = $request->input('date');
        
        
        
        $job->save();
        return redirect()->back()->with('status','Job Added Successfully');
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('auth.edit_job', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $job->position = $request->input('position');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->experience = $request->input('experience');
        $job->requirement = $request->input('requirement');
        $job->hour = $request->input('hour');
        $job->salary = $request->input('salary');
        $job->email = $request->input('email');
        $job->date = $request->input('date');

        $job->update();
        return redirect()->back()->with('status','Job Updated Successfully');
    }


    public function destroy($id)
    {
        $job = Job::find($id);

        $job->delete();
        return redirect()->back()->with('status','Job Deleted Successfully');
    }
}
