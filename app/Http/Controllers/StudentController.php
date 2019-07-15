<?php

namespace App\Http\Controllers;

use App\Student;
use App\Department;
use App\Instructor;
use App\Score;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $instructors = Instructor::all();
        return view('student.create', compact('departments', 'instructors'));
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
            'instructor' => 'required',
            'name' => 'required',
            'tot_cred' => 'required|integer',
        ]);

        $student = new Student();
        $student->department_id = $request->department;
        $student->instructor_id = $request->instructor;
        $student->stud_name = $request->name;
        $student->tot_cred = $request->tot_cred;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // $fullScore = $student->scores;
        return view('student.show', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $departments = Department::all();
        $instructors = Instructor::all();
        return view('student.edit', compact('student', 'departments', 'instructors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'department' => 'required',
            'instructor' => 'required',
            'name' => 'required',
            'tot_cred' => 'required|integer',
        ]);

        $student = Student::find($id);
        $student->department_id = $request->department;
        $student->instructor_id = $request->instructor;
        $student->stud_name = $request->name;
        $student->tot_cred = $request->tot_cred;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->back();

    }
}
