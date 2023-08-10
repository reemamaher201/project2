<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('students.index');
    }

    public function add(){
        return view('students.add');
    }

    public function school(Request $request){
     dd($request);
    }
}
