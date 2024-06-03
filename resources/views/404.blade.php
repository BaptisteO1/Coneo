<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " class="dark_">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 404</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased dark:bg-black dark:text-white w-full h-full">

<main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
      <p class="text-base text-5xl font-semibold text-primary-green">404</p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">La page n'a pas été trouvé</h1>
      <p class="mt-6 text-base leading-7 text-gray-600">Désolé, nous n'avons pas trouvé la page que vous recherchez.</p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="{{ route('pages.home') }}" class="rounded-md bg-primary-green px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
        <a href="{{ route('pages.contact') }}" class="text-sm font-semibold text-green-900">Contact support <span aria-hidden="true">&rarr;</span></a>
      </div>
    </div>
</main>

</body>
</html>