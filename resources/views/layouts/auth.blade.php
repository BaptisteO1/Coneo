<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased h-full">
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <a href="{{route('pages.home')}}">
                <img class="pt-12" src="/images/Logo_typo_coneo_noir.svg" alt="">
            </a>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
            <div class="bg-white px-6 py-12 shadow sm:rounded-lg sm:px-12">
                <form action="{{ $action }}" method="POST" novalidate>
                    @csrf
                    <div class="space-y-6">
                        {{ $slot }}
                        <div class="flex flex-col items-center">
                            <button type="submit" class="flex w-3/4 justify-center rounded-full bg-green-300 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-300/75 focus-visible:outline focus-visible:outline-indigo-600">{{ $submitMessage }}</button>
                            <p>{{ $otherFormMessage }} <a class="decoration-solid" href="{{ $otherAction }}">{{ $otherActionMessage }} </a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>