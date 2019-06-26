<?php

namespace App\Http\Controllers;

use App\Instructor;
use App\Department;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::all();
        return view('instructor.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('instructor.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'department' => 'required',
            'name' => 'required',
            'salary' => 'required|numeric',
        ]);

        $instructor = new Instructor();
        $instructor->department_id = $request->department;
        $instructor->inst_name = $request->name;
        $instructor->salary = $request->salary;
        $instructor->save();
        return redirect()->route('instructor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructor = Instructor::find($id);
        $departments = Department::all();
        return view('instructor.edit', compact('instructor', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'department' => 'required',
            'name' => 'required',
            'salary' => 'required|numeric',
        ]);

        $instructor = Instructor::find($id);
        $instructor->department_id = $request->department;
        $instructor->inst_name = $request->name;
        $instructor->salary = $request->salary;
        $instructor->save();
        return redirect()->route('instructor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Instructor::find($id)->delete();
        return redirect()->back();
    }
}
