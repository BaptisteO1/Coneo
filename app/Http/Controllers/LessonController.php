<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    // public function show(Lesson $lesson)
    // {
    //     return view('pages.lesson', ['lesson' => $lesson]);
    // }

    public function show(Lesson $lesson)
    {
        $nextLesson = $lesson->nextLesson();
        $previousLesson = $lesson->previousLesson();
        return view('pages.lesson', compact('lesson', 'nextLesson', 'previousLesson'));
    }

}
