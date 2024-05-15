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

Route::view('/', 'pages.home')->name('home');

Route::get('/course/{course}', [CourseController::class, 'show'])->name('pages.courses');
Route::get('/lesson/{lesson}', [LessonController::class, 'show'])->name('pages.lesson');
