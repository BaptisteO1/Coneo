<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View { 
        return view('pages.courses', [
            'courses' => Course::latest()->paginate(4),
        ]);
    }
}