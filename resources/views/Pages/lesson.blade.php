<x-layout :title="$lesson->title">

    <div class="space-y-10 md:space-y-16 mx-6 md:mx-12 mt-24 mb-10">
        {{-- Début de la lesson --}}
        <article class="flex-center lg:flex-row pb-10 md:pb-16 border-b">
            <div class="flex flex-col items-start mt-5 space-y-5 lg:w-7/12 lg:mt-0 lg:ml-12">
                <a href="" class="underline font-bold text-slate-900 text-lg">Catégorie</a>
                <h1 class="font-bold text-slate-900 text-3xl lg:text-5xl leading-tight">{{ $lesson->title }}</h1>
                <ul class="flex flex-wrap gap-2">
                    <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 1</a></li>
                    <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 2</a></li>
                </ul>
                <p class="text-xl lg:text-2xl text-slate-600">
                    {!! nl2br(e($lesson->content)) !!}
                </p>
                <time class="text-xs text-slate-400" datetime="{{ $lesson->created_at }}">{{ $lesson->created_at }}</time>
            </div>
        </article>
        {{-- Fin de la lesson --}}
    </div>

</x-layout>