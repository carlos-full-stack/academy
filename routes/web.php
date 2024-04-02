<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/", [HomeController::class,"index"]);
Route::get('/cursos', [CoursesController::class, 'index']);
Route::get('cursos/nuevo', [CoursesController::class, 'create']);
Route::get('cursos/{$course}', [CoursesController::class, 'show']);



