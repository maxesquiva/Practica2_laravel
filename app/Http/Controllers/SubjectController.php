<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index() {
        $subject = Subject::with('student','professor')->get();
        // $student = Student::with('subjects')->get();
        return response()->json($subject);
    }

    public function show(Request $request) {
        $subject = Subject::findOrFail($request->id);
        return response()->json($subject);
    }

    public function store(Request $request) {

        $subject = Subject::create($request->all());

        return response()->json($subject);
    } 

    public function update(Request $request) {
        
        $subject = Subject::find($request->id);

        $subject->update($request->all());

        return response()->json($subject);
    }

    public function delete(Request $request) {
        $subject = Subject::findOrFail($request->id)->delete();

        return response()->json($subject);

    }
}
