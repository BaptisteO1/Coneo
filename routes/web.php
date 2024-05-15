<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [CourseController::class, 'index'])->name('index');
Route::get('/lesson/{lesson}', [LessonController::class, 'show'])->name('pages.lesson');
