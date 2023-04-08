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

    <nav
        class="flex md:flex-row flex-col flex-wrap justify-between md:px-32 sm:px-10 px-4 items-center py-4 bg-sky-900 border-b-4 border-gray-200">
        <div class="flex items-center md:justify-between justify-center flex-wrap w-1/4">
            <a href="/" class="w-auto bg-red-300">
                <img src="{{ asset('images/logo.png') }}" alt="imagen logo" class="h-10">
            </a>

            <!-- dropdown component -->

            <div class="relative my-3" data-te-dropdown-ref>
                <button
                    class="flex items-center whitespace-nowrap rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800  transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] motion-reduce:transition-none"
                    type="button" id="dropdownMenuButton9" data-te-dropdown-toggle-ref aria-expanded="false"
                    data-te-ripple-init>
                    Categorias
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
                            href="#" data-te-dropdown-item-ref>American english file Lorem, ipsum dolor.</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                            href="#" data-te-dropdown-item-ref>Another action</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                            href="#" data-te-dropdown-item-ref>Something else here</a>
                    </li>
                </ul>
            </div>

            <!-- END dropdown component -->
        </div>


        <form action="{{ route('search') }}" method="post"
            class="search-container md:w-3/6 w-full my-2 flex items-center justify-center">
            @csrf
            <div
                class="md:w-3/4 w-full rounded flex items-center border-y border-s overflow-hidden border-cyan-700  shadow-[0_4px_9px_-4px_#fbfbfb] ">
                <input type="text" placeholder="Buscar por titulo, ISBN, etc." class="w-11/12 p-2 outline-none"
                    autofocus>

                <button type="submit" class="flex justify-center bg-gray-200 py-2 px-4 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>
        </form>

        <div class="auth-container md:w-1/4 w-full my-2 flex justify-end">
            <a href="" class="text-gray-100">Registrarse</a>
            <a href="" class="text-gray-100 ms-4">Ingresar</a>
        </div>
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
