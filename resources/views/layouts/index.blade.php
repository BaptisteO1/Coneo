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

        <main class="my-10 md:my-12 lg:my-16">
            @yield('content')
        </main>

    </div>

    <x-footer/>
</body>
</html>