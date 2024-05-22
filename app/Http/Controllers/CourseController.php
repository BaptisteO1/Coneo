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

       $search = $request->search;
       
       return $this->coursesView($request->$search ? ['search' => $request->$search] : []);

    }

    public function coursesByTheme(Theme $theme): View {

         return $this->coursesView(['theme' => $theme]);

    }

    public function coursesByTag(Tag $tag): View
    {
        return $this->coursesView(['tag' => $tag]);
    }

    protected function coursesView(array $filters): View
    {
        return view('pages.courses', [
            'courses' => Course::filters($filters)->latest()->paginate(4),
        ]);
    }
}