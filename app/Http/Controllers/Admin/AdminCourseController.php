<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Theme;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCourseController extends Controller
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
        return view('admin.courses.index', [
            'courses' => Course::without('theme', 'tags')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.form', [
            'themes' => Theme::orderBy('name')->get(),
            'tags' => Tag::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $validated = $request->validated();

        $validated['thumbnail'] = $validated['thumbnail']->store('thumbnails');
        $validated['excerpt'] = Str::limit($validated['description'], 150);

        

        $course = course::create($validated);
        $course->tags()->sync($validated['tag_ids'] ?? null);

        return redirect()->route('pages.courses', ['course' => $course])->withStatus('course publié !');
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $course)
    {
        //
    }
}
