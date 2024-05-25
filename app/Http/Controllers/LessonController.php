<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('comment');
    }

    public function show(Lesson $lesson)
    {
        $nextLesson = $lesson->nextLesson();
        $previousLesson = $lesson->previousLesson();
        return view('pages.lesson', compact('lesson', 'nextLesson', 'previousLesson'));
    }

    public function comment(Lesson $lesson, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'comment' => ['required', 'string', 'between:2,255'],
        ]);

        Comment::create([
            'content' => $validated['comment'],
            'lesson_id' => $lesson->id,
            'user_id' => Auth::id(),
        ]);

        return back()->withStatus('Commentaire publié !');
    }

}
