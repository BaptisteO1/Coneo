<x-default-layout :title="$course->exists() ? 'Modifier un course' : 'Créer un course'">
    <form action="{{ $course->exists() ? route('admin.courses.update', ['course' => $course]) : route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($course->exists())
        @method('PATCH')
        @endif
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="text-base font-semibold leading-7 text-gray-900">
                    {{ $course->exists() ? 'Modifier un course' : 'Créer un cours' }}
                </h1>
                <p class="mt-1 text-sm leading-6 text-gray-600">Révélons au Monde nos cours !</p>

                <div class="mt-10 space-y-8 md:w-2/3">
                    <x-input name="title" label="Titre" :value="$course->title" />
                    <x-input name="slug" label="Slug" :value="$course->slug" help="Laisser vide pour un slug auto. Si une valeur est renseignée, elle sera slugifiée avant d'être soumise à validation." />
                    <x-textarea name="description" label="Description du course" row="4">{{ $course->description }}</x-textarea>
                    <x-input name="thumbnail" type="file" label="Vignette" :value="$course->thumbnail" />
                    <x-select name="theme_id" label="Catégorie" :value="$course->theme_id" :list="$themes" optionsTexts="name"/>
                    <x-select name="tag_ids" label="Etiquettes" :value="$course->tags" :list="$tags" multiple optionsTexts="name"/>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Publier</button>
        </div>
    </form>
</div>
</x-default-layout>