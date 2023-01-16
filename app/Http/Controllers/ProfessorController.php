<?php

namespace App\Http\Controllers;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index() {
        $professor = Professor::with('subject')->get();
        return response()->json($professor);
    }
   

    public function show(Request $request) {
        $professor = Professor::findOrFail($request->id);
        return response()->json($professor);
    }

    public function store(Request $request) {

        $professor = Professor::create($request->all());

        return response()->json($professor);
    } 

    public function update(Request $request) {
        
        $professor = Professor::find($request->id);

        $professor->update($request->all());

        return response()->json($professor);
    }

    public function delete(Request $request) {
        $professor = Professor::findOrFail($request->id)->delete();

        return response()->json($professor);

    }
}
