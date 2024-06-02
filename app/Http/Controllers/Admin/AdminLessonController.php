<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LessonRequest;
use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Tag;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminLessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.lessons.index', [
            'lessons' => Lesson::without('courses', 'tags')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lessons.form', [
            'courses' => Course::orderBy('title')->get(),
            'tags' => Tag::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LessonRequest $request)
    {
        $validated = $request->validated();

        $validated['thumbnail'] = $validated['thumbnail']->store('thumbnails');
        $validated['excerpt'] = Str::limit($validated['content'], 150);

        

        $lesson = Lesson::create($validated);
        $lesson->tags()->sync($validated['tag_ids'] ?? null);

        return redirect()->route('pages.lessons', ['lesson' => $lesson])->withStatus('lesson publié !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
