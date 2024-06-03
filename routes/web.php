<?php

use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::patch('/home', [DashboardController::class, 'updatePassword']);

Route::resource('/admin/course', AdminCourseController::class)->except('show')->names('admin.courses');

Route::view('/', 'pages.home')->name('pages.home');

Route::view('/', 'pages.home')->name('pages.home');

Route::view('/contact', 'pages.contact')->name('pages.contact');
Route::view('/nos-offres', 'pages.offres')->name('pages.offres');

Route::get('/course/{course}', [CourseController::class, 'show'])->name('pages.courses');
Route::get('/themes/{theme}', [CourseController::class, 'coursesByTheme'])->name('courses.byTheme');
Route::get('/tag/{tag}', [CourseController::class, 'coursesByTag'])->name('courses.byTag');
Route::get('/lesson/{lesson}', [LessonController::class, 'show'])->name('pages.lesson');

Route::post('/{lesson}/comment', [LessonController::class, 'comment'])->name('lesson.comment');

// Méthode fallback() en dernière position
Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });
 