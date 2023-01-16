<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\SubjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//rutas alumnos
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::post('/student', [StudentController::class, 'store']);
Route::patch('/student/{id}', [StudentController::class, 'update']);
Route::delete('/student/{id}', [StudentController::class, 'delete']);


//rutas profesores
Route::get('/professor', [ProfessorController::class, 'index']);
Route::get('/Professor/{id}', [ProfessorController::class, 'show']);
Route::post('/Professor', [ProfessorController::class, 'store']);
Route::patch('/Professor/{id}', [ProfessorController::class, 'update']);
Route::delete('/Professor/{id}', [ProfessorController::class, 'delete']);


//rutas asignaturas
Route::get('/subject', [SubjectController::class, 'index']);
Route::get('/subject/{id}', [SubjectController::class, 'show']);
Route::post('/subject', [SubjectController::class, 'store']);
Route::patch('/subject/{id}', [SubjectController::class, 'update']);
Route::delete('/subject/{id}', [SubjectController::class, 'delete']);