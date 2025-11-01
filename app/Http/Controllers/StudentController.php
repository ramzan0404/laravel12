<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        return view('students.index',['students'=>$students]);
    }

    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'batch' => 'nullable' // optional input
        ]);
        $newStudent = Student::create($data);
        return redirect()->route('student.index');
    }

    public function edit(Student $student){
        return view('students.edit', ['student'=>$student]);
    }

    public function update(Student $student, Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'batch' => 'nullable|string'
        ]);
        $student->update($data);
        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
    }    

    public function destroy(Student $student){
        $student->delete();
        return redirect(route('student.index'))->with ('success', 'student Deleted Successfully');
    }
}
