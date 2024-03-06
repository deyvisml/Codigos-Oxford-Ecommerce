<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    
    <title>@yield('title') - Códigos Oxford</title>

    <meta name="keywords" content="Comprar código Oxford, practica en linea, English File, American English File, Código Oxford España, Libros American English File, pdf, audios">
    <meta name="author" content="Códigos Oxford">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <link rel="canonical" href="{{ url()->current(); }}"/>

    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title') - Códigos Oxford">
    <meta property="og:description"
    content="Encuentra los códigos y licencias para tus libros Oxford (OUP). Estos códigos te brindarán acceso a recursos como el Online Practice y e-books de colecciones como English File, American English File, Headway, ¡y muchas más!" />
    <meta property="og:url" content="https://codigosoxford.com" />
    <meta property="og:site_name" content="Códigos Oxford">
    <meta property="og:image" content="{{ asset('images/icons/favicon-192x192.png') }}">
        
    @stack('headers')
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('libs/tw-elements/tw-elements.min.css') }}">
    @stack('css-scripts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    @php
        // mala practica pero no pude crear una controlador para esta vista template
        use App\Models\Country;
        use App\Models\Category;

        // get  countries
        $countries = Country::get();

        // get categories
        $categories = Category::limit(5)->get();
    @endphp

    <nav class="flex flex-wrap items-center justify-between px-4 py-2 md:px-32 sm:px-10 bg-sky-900 sm:gap-x-4 gap-x-2">
        <div class="flex flex-wrap items-center justify-center w-full md:justify-between md:w-2/12">
            <a href="/" class="w-auto" title="Inicio">
                <img src="{{ asset('images/logo.png') }}" alt="imagen logo" title="logo códigos oxford" class="object-contain max-h-[75px]">
            </a>
        </div>

        <form action="{{ route('search.index') }}" method="get"
            class="search-container md:w-5/12 w-full sm:min-w-[400px] md:my-0 mt-3 flex items-center justify-center">

            <div class="flex items-center w-full overflow-hidden rounded md:w-full border-y border-s ">
                <input type="text" name="keyword" placeholder="Buscar por titulo, ISBN, etc."
                    class="w-11/12 p-2 outline-none" autofocus required>

                <button type="submit" data-te-ripple-init data-te-ripple-color="dark"
                    class="flex justify-center px-4 py-2 cursor-pointer bg-neutral-200 hover:bg-neutral-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>
        </form>

        <!-- dropdown component -->
        <div class="relative my-3 w-2/12 min-w-[180px]" data-te-dropdown-ref>
            <button
                class="flex items-center whitespace-nowrap rounded bg-neutral-50 px-4 py-1.5 text-sm font-medium leading-normal text-neutral-800  transition duration-150 ease-in-out hover:bg-neutral-100  focus:bg-neutral-100 focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] motion-reduce:transition-none"
                type="button" id="dropdownMenuButton9" data-te-dropdown-toggle-ref aria-expanded="false"
                data-te-ripple-init>
                Soy estudiante
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mb-1 ms-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>

                <span class="w-2 ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>
            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                aria-labelledby="dropdownMenuButton9" data-te-dropdown-menu-ref>
                @foreach ($countries as $country)
                    <li>
                        <a class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                            href="{{ route('schools.index', ['country' => $country]) }}" title="{{$country->name}}" data-te-dropdown-item-ref>
                            {{ $country->name }}
                            <img src="{{ asset('images/country-flags/' . $country->flag) }}"
                                class="inline-block w-6 h-6 mb-1 ms-2" alt="{{$country->flag}}" title="{{$country->flag}}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- END dropdown component -->

        <div class="w-auto min-w-[150px] my-2 flex justify-end">
            @auth
                <div class="relative" data-te-dropdown-ref>
                    <!-- Second dropdown trigger -->
                    <a class="flex items-center justify-center transition duration-150 ease-in-out cursor-pointer hidden-arrow whitespace-nowrap motion-reduce:transition-none"
                        href="#" title="opciones de usuario" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <!-- User avatar -->
                        <img src="{{ auth()->user()->picture }}"
                            class="border-2 rounded-full w-9 h-9 border-neutral-300 me-2" alt="user image" title="user" loading="lazy" />
                        <p class="text-sm cursor-pointer text-neutral-100 me-1">{{ auth()->user()->first_name }}</p>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 mt-1 text-neutral-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>
                    <!-- Second dropdown menu -->
                    <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                        <!-- Second dropdown menu items -->
                        <li>
                            <a class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                href="{{ route('purchase.list') }}" title="mis compras" data-te-dropdown-item-ref>Mis compras</a>
                        </li>
                        <li>
                            <a class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                                href="/google-auth/logout" title="salir" data-te-dropdown-item-ref title="salir">Salir</a>
                        </li>
                    </ul>
                </div>
            @endauth
            @guest
                <a href="/google-auth/redirect" title="ingresar" class="text-left text-gray-100">Ingresar / Registrarse</a>
            @endguest
        </div>
    </nav>
    <nav class="px-5 border-gray-300 md:px-32 sm:px-10 bg-neutral-50 border-y-4">
        <ul class="flex flex-wrap justify-start text-sm ">
            @foreach ($categories as $category)
                <li
                    class="{{ isset($current_category) ? ($category->id === $current_category->id ? 'bg-neutral-200' : '') : '' }} sm:w-auto w-full">
                    <a href="{{ route('series.index', ['category' => $category]) }}" title="{{$category->name}}"
                        class="block p-1 px-4 text-gray-900 hover:text-black hover:bg-neutral-200">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>

    <main class="bg-white">
        @yield('content')
    </main>

    <footer class="flex items-center justify-center h-24 bg-sky-200">
        <p class="text-center">Códigos Oxford 2013-2024 ©</p>
    </footer>


    <script src="{{ asset('libs/tw-elements/tw-elements.umd.min.js') }}"></script>
    @stack('js-scripts')
</body>

</html>
