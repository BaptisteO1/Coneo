<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Theme;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function show(Request $request): View { 

        $courses = Course::query();

        if ($search = $request->search) {
            $courses->where(fn (Builder $query) => $query
                ->where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('description', 'LIKE', '%' . $search . '%')
            );
        }

        return view('pages.courses', [
            'courses' => $courses->latest()->paginate(4),
        ]);
    }

    public function coursesByTheme(Theme $theme): View {
        return view('pages.courses', [
            'courses' => Course::where('theme_id', $theme->id)->latest()->paginate(4),
        ]);
    }

    public function coursesByTag(Tag $tag): View
    {
        return view('pages.courses', [
            'courses' => Course::whereHas('tags', function ($query) use ($tag) {
                $query->where('tags.id', $tag->id);
            })->latest()->paginate(4),
        ]);
    }
}