{{-- Header --}}
<header class="flex justify-between items-center space-x-5 text-slate-900 dark:text-white py-4 px-10 md:px-24 fixed left-0 right-0 top-0 z-40 backdrop-blur-xl">
    {{-- Logo --}}
    <a href="{{ route('pages.home') }}">
        <img
            class="w-auto animate-wiggle"
            src="/images/logo_coneo_black_and_green.svg"
            alt="logo_coneo_black_and_green"
        />
    </a>
    {{-- Navigation --}}
    <div x-data="{ open: false }" x-cloak class="relative">
        <ul class="hidden lg:flex space-x-12 font-semibold items-center text-center">
            <li><a class="hover:text-green-300" href="{{ route('pages.home') }}">Accueil</a></li>
            <li><a class="hover:text-green-300" href="">Nos offres</a></li>
            <li><a class="hover:text-green-300" href="{{ route('pages.courses', ['course']) }}">Nos cours</a></li>
            <li><a class="hover:text-green-300" href="">A propos</a></li>
            <li><a class="hover:text-green-300" href="">Contact</a></li>
        </ul>
    </div>
    {{-- Formulaire de recherche --}}
    {{-- <form action="{{ route('pages.courses', ['course']) }}" class="pb-3 pr-2 flex items-center border-b border-b-slate-300 text-slate-300 focus-within:border-b-slate-900 focus-within:text-slate-900 transition">
        <input id="search" value="{{ request()->search }}" class="px-2 w-full outline-none leading-none placeholder-slate-400" type="search" name="search" placeholder="Rechercher un article">
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
            </svg>
        </button>
    </form> --}}
    {{-- Navigation --}}
    <nav x-data="{ open: false }" x-cloak class="relative">
        <button
            @click="open = !open"
            @click.outside="if (open) open = false"
            class="lg:hidden w-8 h-8 flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
            </svg>
        </button>
        <ul
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="lg:hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
            tabindex="-1"
        >
            <li><a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Connexion</a></li>
            <li>
                <a href="{{ route('register') }}" class="flex items-center px-4 py-2 font-semibold text-sm text-indigo-700 hover:bg-gray-100">
                    Inscription
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ml-1">
                        <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
        </ul>
        <ul class="hidden lg:flex space-x-12 font-semibold">
            <li><a href="{{ route('login') }}">Connexion</a></li>
            <li>
                <a href="{{ route('register') }}" class="flex items-center group text-indigo-700">
                    Inscription
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1 group-hover:ml-2 group-hover:mr-0 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</header>