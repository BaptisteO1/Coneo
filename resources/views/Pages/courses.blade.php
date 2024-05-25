<x-default-layout title="Cours">

    <div class="space-y-10 md:space-y-16 mx-6 md:mx-12 mt-24 mb-10">
        @forelse ($courses as $course)
        {{-- Début du cours --}}
        <article class="flex flex-col lg:flex-row pb-10 md:pb-16 border-b">
            <div class="lg:w-5/12">
                <img class="w-full max-h-72 object-cover lg:max-h-none lg:h-full" src="{{ $course->thumbnail }}">
            </div>
            <div class="flex flex-col items-start mt-5 space-y-5 lg:w-7/12 lg:mt-0 lg:ml-12">
                @if ($course->theme)
                    <a href="{{ route('courses.byTheme', ['theme' => $course->theme]) }}" class="underline font-bold text-slate-900 text-lg">{{ $course->theme->name}}</a>
                @endif
                <h1 class="font-bold text-slate-900 text-3xl lg:text-5xl leading-tight">{{ $course->title }}</h1>
                @if ($course->tags->isNotEmpty())
                <ul class="flex flex-wrap gap-2">
                    @foreach ($course->tags as $tag)
                    <li><a href="{{ route('courses.byTag', ['tag' => $tag]) }}" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
                @endif
                <p class="text-xl lg:text-2xl text-slate-600">
                    {{ $course->excerpt }}
                </p>
                <a href="{{route('pages.lesson', ['lesson' => $course->firstLesson])}}" class="flex items-center py-5 px-7 font-semibold bg-slate-900 transition text-slate-50 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                    </svg>
                    Accéder aux leçons
                </a>
            </div>
        </article>

        @empty
        <p class="text-slate-400 text-center">Aucun résultat.</p>
        {{-- Fin du cours --}}
        @endforelse

        {{ $courses->links() }}
    </div>

</x-default-layout>