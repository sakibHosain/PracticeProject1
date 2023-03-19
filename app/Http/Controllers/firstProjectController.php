<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentsModel;

class firstProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = studentsModel::all();
        return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['editdata'] = '';
        return view('form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newstu = new studentsModel();
        $newstu->Name = $request->name;
        $newstu->Roll = $request->roll;
        $newstu->Registration_No = $request->reg;
        $newstu->Mobile_No = $request->mobile;
        $newstu->Address = $request->address;
        $newstu->save();
        return redirect()-> route ('view.student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['editdata'] = studentsModel::find($id);
        return view('form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $newstu = studentsModel::find($id);
        $newstu->Name = $request->name;
        $newstu->Roll = $request->roll;
        $newstu->Registration_No = $request->reg;
        $newstu->Mobile_No = $request->mobile;
        $newstu->Address = $request->address;
        $newstu->save();
        return redirect()-> route ('view.student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stu = studentsModel::find($id);
        $stu->delete();
        return back();
    }
}
