<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Códigos Ingles - @yield('title')</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>

    @stack('css-scripts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">

    <nav class="flex flex-wrap justify-between md:px-32 sm:px-10 px-4 items-center py-4 bg-sky-900 gap-x-4">
        <div class="flex items-center md:justify-between justify-center flex-wrap md:w-2/12 w-full bg-red-100">
            <a href="/" class="w-auto bg-red-100">
                <img src="{{ asset('images/logo.png') }}" alt="imagen logo" class="h-10">
            </a>
        </div>

        <form action="{{ route('search') }}" method="post"
            class="search-container md:w-5/12 w-full sm:min-w-[400px] md:my-0 mt-3 flex items-center justify-center">
            @csrf
            <div
                class="md:w-full w-full rounded flex items-center border-y border-s overflow-hidden border-cyan-700  shadow-[0_4px_9px_-4px_#fbfbfb] ">
                <input type="text" placeholder="Buscar por titulo, ISBN, etc." class="w-11/12 p-2 outline-none"
                    autofocus>

                <button type="submit" data-te-ripple-init data-te-ripple-color="dark"
                    class="flex justify-center bg-neutral-200 py-2 px-4 cursor-pointer hover:bg-neutral-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>
        </form>

        <!-- dropdown component -->
        <div class="relative my-3 w-2/12 min-w-[200px]" data-te-dropdown-ref>
            <button
                class="flex items-center whitespace-nowrap rounded bg-neutral-50 px-6 py-1.5 text-sm font-medium leading-normal text-neutral-800  transition duration-150 ease-in-out hover:bg-neutral-100  focus:bg-neutral-100 focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] motion-reduce:transition-none"
                type="button" id="dropdownMenuButton9" data-te-dropdown-toggle-ref aria-expanded="false"
                data-te-ripple-init>
                Soy estudiante
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 ms-2 mb-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>

                <span class="ml-2 w-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>
            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                aria-labelledby="dropdownMenuButton9" data-te-dropdown-menu-ref>
                <li>
                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                        href="{{ route('instituciones') }}" data-te-dropdown-item-ref>Instituciones México
                        <img src="{{ asset('images/country-flags/mexico.png') }}" class="w-7 h-7 inline-block ms-2 mb-1"
                            alt="">
                    </a>
                </li>
                <li>
                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                        href="#" data-te-dropdown-item-ref>Instituciones Perú

                        <img src="{{ asset('images/country-flags/peru.png') }}" class="w-6 h-6 inline-block ms-2 mb-1"
                            alt="">
                    </a>
                </li>
                <li>
                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                        href="#" data-te-dropdown-item-ref>Otras instituciones</a>
                </li>
            </ul>
        </div>
        <!-- END dropdown component -->

        <div class="w-auto min-w-[150px] my-2 flex justify-end">
            <a href="" class="text-gray-100 text-left">Ingresar / Registrarse</a>
        </div>
    </nav>
    <nav class="md:px-32 sm:px-10 px-5 bg-neutral-50 border-y-4 border-gray-300">
        <ul class=" flex flex-wrap justify-start text-sm">
            <li class="">
                <a href=""
                    class="text-gray-900 block p-1.5 px-4 hover:text-black hover:bg-neutral-200">Pre-School
                    Children</a>
            </li>
            <li class="">
                <a href="" class="text-gray-900 block p-1.5 px-4 hover:text-black hover:bg-neutral-200">Young
                    Learners</a>
            </li>
            <li class="">
                <a href=""
                    class="text-gray-900 block p-1.5 px-4 hover:text-black hover:bg-neutral-200">Secundaria y
                    Bachillerato</a>
            </li>
        </ul>
    </nav>

    <main class="bg-white">
        @yield('content')
    </main>

    <footer class="mt-10 h-24 bg-sky-200 flex justify-center items-center">
        <p class="text-center">Todos los derechos reservados 2023 ©</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    @stack('js-scripts')
</body>

</html>
