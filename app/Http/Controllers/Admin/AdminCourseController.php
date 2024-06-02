<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Theme;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

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

    public function create(): View
    {
        return $this->showForm();
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function edit(Course $course): View
     {
         return $this->showForm($course);
     }

    protected function showForm(Course $course = new Course): View
    {
        return view('admin.courses.form', [
            'course' => $course,
            'themes' => Theme::orderBy('name')->get(),
            'tags' => Tag::orderBy('name')->get(),
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request): RedirectResponse
    {

        return $this->save($request->validated());
    
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, Course $course): RedirectResponse
    {
        return $this->save($request->validated(), $course);
    }

    protected function save(array $data, Course $course = null): RedirectResponse
    {
        if (isset($data['thumbnail'])) {
            if (isset($course->thumbnail)) {
                Storage::delete($course->thumbnail);
            }
            $data['thumbnail'] = $data['thumbnail']->store('thumbnails');
        }

        $data['excerpt'] = Str::limit($data['description'], 150);

        $course = Course::updateOrCreate(['id' => $course?->id], $data);
        $course->tags()->sync($data['tag_ids'] ?? null);

        return redirect()->route('pages.courses', ['course' => $course])->withStatus(
            $course->wasRecentlyCreated ? 'course publié !' : 'course mis à jour !'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $course)
    {
        Storage::delete($course->thumbnail);
        $course->delete();

        return redirect()->route('admin.courses.index');
    }
}

