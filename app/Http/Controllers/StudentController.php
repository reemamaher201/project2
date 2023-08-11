<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('students.index',['students' => $students]);

    }

    public function add(){
        return view('students.add');
    }

    public function school(Request $request){
     $data = $request->validate([
         'name' => 'required',
         'email' => 'required',
         'address' => 'required',
         'phone' => 'required|numeric',
     ]);

     $newStudent = Student::create($data);

     return redirect(route('students.index'));
    }

    public function edit(Student $student){
return view('students.edit',['students' => $student]);
    }

    public function update(Student $student ,Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
        ]);

        $student->update($data);
        return redirect(route('students.index'))->with('success','student updated successfully');

    }

    public function destroy(Student $student){
        $student->delete();
        return redirect(route('students.index'))->with('success','student deleted successfully');


    }
}

