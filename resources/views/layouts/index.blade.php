<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased pt-10 pb-16 md:pb-32">
    
    {{-- Conteneur global --}}
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <x-header />

        <main class="mt-10 md:mt-12 lg:mt-16">
            <div class="space-y-10 md:space-y-16">
                {{-- Début du cours --}}
                <article class="flex flex-col lg:flex-row pb-10 md:pb-16 border-b">
                    <div class="lg:w-5/12">
                        <img class="w-full max-h-72 object-cover lg:max-h-none lg:h-full" src="https://via.placeholder.com/640x480.png">
                    </div>
                    <div class="flex flex-col items-start mt-5 space-y-5 lg:w-7/12 lg:mt-0 lg:ml-12">
                        <a href="" class="underline font-bold text-slate-900 text-lg">Catégorie</a>
                        <h1 class="font-bold text-slate-900 text-3xl lg:text-5xl leading-tight">Titre</h1>
                        <ul class="flex flex-wrap gap-2">
                            <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 1</a></li>
                            <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 2</a></li>
                        </ul>
                        <p class="text-xl lg:text-2xl text-slate-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, sapiente eaque consectetur rem nulla sit aliquam corporis labore obcaecati qui explicabo ipsum, mollitia ad iure, eligendi id consequuntur earum. Tempore.
                        </p>
                        <a href="" class="flex items-center py-5 px-7 font-semibold bg-slate-900 transition text-slate-50 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                            </svg>
                            Accéder aux leçons
                        </a>
                    </div>
                </article>
                {{-- Fin du cours --}}
            </div>
        </main>
    </div>

    <x-footer/>
</body>
</html>