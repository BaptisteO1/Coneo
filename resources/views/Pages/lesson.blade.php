<x-default-layout :title="$lesson->title">

    <div class="space-y-10 md:space-y-16 mx-6 md:mx-12 mt-24 mb-10">
        {{-- Début de la lesson --}}
        <article class="flex-center lg:flex-row pb-10 md:pb-16 border-b">
            <div class="flex flex-col items-start mt-5 space-y-5 lg:w-7/12 lg:mt-0 lg:ml-12">
                <h1 class="font-bold text-slate-900 text-3xl lg:text-5xl leading-tight">{{ $lesson->title }}</h1>
                <p class="text-xl lg:text-2xl text-slate-600">
                    {!! nl2br(e($lesson->content)) !!}
                </p>
                <time class="text-xs text-slate-400" datetime="{{ $lesson->created_at }}">{{ $lesson->created_at }}</time>
            </div>
        </article>
        {{-- Fin de la lesson --}}

        <div class="mt-5 flex justify-center gap-10">
            @if($previousLesson)
                <a href="{{ route('pages.lesson', ['lesson' => $previousLesson->slug]) }}" class="py-2 px-6 md:px-8 rounded-full text-white bg-green-300">
                    Leçon précédente
                </a>
            @else
                <span></span>
            @endif
            
            @if($nextLesson)
                <a href="{{ route('pages.lesson', ['lesson' => $nextLesson->slug]) }}" class="py-2 px-6 md:px-8 rounded-full text-white bg-green-300">
                    Leçon suivante
                </a>
            @endif
        </div>
    </div>

</x-default-layout>