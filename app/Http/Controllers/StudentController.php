<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $student = Student::with('subjects')->get();
        return response()->json($student);
    }
   
    public function show(Request $request) {
        $student = Student::findOrFail($request->id);
        return response()->json($student);
    }

    public function store(Request $request) {

        $student = Student::create($request->all());

        return response()->json($student);
    } 

    public function update(Request $request) {
        
        $student = Student::find($request->id);

        $student->update($request->all());

        return response()->json($student);
    }

    public function delete(Request $request) {
        $student = Student::findOrFail($request->id)->delete();

        return response()->json($student);

    }
}
