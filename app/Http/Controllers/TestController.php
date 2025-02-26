<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Fcades\File;

class TestController extends Controller
{
    
    public function show()
    {
        $test = Test::all();
        return view('auth.show_test', compact('test'));
    }
    
    public function index()
    {
        $test = Test::all();
        return view('auth.test', compact('test'));
    }

    public function create()
    {
        return view('auth.create_test');
    }

    public function store(Request $request)
    {
        $test = new Test;
        $test->name = $request->input('name');
        $test->catagory = $request->input('catagory');
        $test->sample = $request->input('sample');
        $test->price = $request->input('price');
        $test->delivery = $request->input('delivery');
        $test->comment = $request->input('comment');
        
        
        
        $test->save();
        return redirect()->back()->with('status','Test Added Successfully');
    }

    public function edit($id)
    {
        $test = test::find($id);
        return view('auth.edit_test', compact('test'));
    }

    public function update(Request $request, $id)
    {
        $test = test::find($id);
        $test->name = $request->input('name');
        $test->catagory = $request->input('catagory');
        $test->sample = $request->input('sample');
        $test->price = $request->input('price');
        $test->delivery = $request->input('delivery');
        $test->comment = $request->input('comment');



        $test->update();
        return redirect()->back()->with('status','Test Updated Successfully');
    }


    public function destroy($id)
    {
        $test = test::find($id);

        $test->delete();
        return redirect()->back()->with('status','Test Deleted Successfully');
    }



}
