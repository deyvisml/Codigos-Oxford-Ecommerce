@extends('layouts.app')

@section('title')
    Item
@endsection

@push('css-scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <style>
        .splide__pagination {
            bottom: -20px !important;
        }

        .splide__pagination__page {
            background-color: gray !important;
        }

        .splide__pagination__page.is-active {
            background-color: #0369a1 !important;
        }

        .splide__arrow--prev {
            background-color: #0369a1 !important;
            margin-left: -50px;
            font-size: 25px;
        }

        .splide__arrow--next {

            background-color: #0369a1 !important;
            margin-right: -50px;
            font-size: 25px;
        }
    </style>
@endpush

@section('content')
    <div class="my-8 md:mx-32 sm:mx-10 mx-5">
        <div class="flex gap-x-3">
            <a href="/" class="text-sky-800 hover:underline">Inicio</a>
            <p>/</p>
            <a href="/" class="text-sky-800 hover:underline">Categoria X</a>
        </div>

        <h2 class="text-2xl font-semibold mt-5 border-b-2 pb-3">
            English File Fourth Edition Elementary Online Practice
        </h2>

        <div class="flex my-5 flex-wrap justify-around py-5">
            <div class="md:w-52 border rounded flex justify-center items-center h-52 p-5">
                <img src="https://picsum.photos/80/100" alt="" class="h-full object-contain">
            </div>

            <div class="md:w-6/12 w-full md:m-5 mx-2 md:my-0 my-5 md:order-2 order-3">

                <p class="text-xl font-semibold">Caracteristicas principales</p>

                <ul class="bg-white my-5 rounded">
                    <li class="flex border-b border-gray-300">
                        <p class="w-1/3 font-bold text-sm bg-gray-100 p-3">Edición</p>
                        <p class="w-2/3 text-sm p-3">Lorem, ipsum dolor.</p>
                    </li>
                    <li class="flex border-b border-gray-300">
                        <p class="w-1/3 font-bold text-sm bg-gray-50 p-3">Edición</p>
                        <p class="w-2/3 text-sm p-3">Lorem, ipsum dolor.</p>
                    </li>
                    <li class="flex border-b border-gray-300">
                        <p class="w-1/3 font-bold text-sm bg-gray-100 p-3">Edición</p>
                        <p class="w-2/3 text-sm p-3">Lorem, ipsum dolor.</p>
                    </li>
                    <li class="flex border-b border-gray-300">
                        <p class="w-1/3 font-bold text-sm bg-gray-50 p-3">Edición</p>
                        <p class="w-2/3 text-sm p-3">Lorem, ipsum dolor.</p>
                    </li>

                </ul>
            </div>

            <div
                class="md:w-80 sm:w-auto md:my-0 my-5 w-full rounded bg-white shadow border-2 border-gray-100 p-4 md:order-3 order-2">
                <p class="text-4xl font-semibold">S/ 40</p>
                <p class="my-3 text-sky-700 text-sm font-semibold">Stock disponible
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 mb-1 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>
                </p>

                <label for="cantidad" class="block my-1">Cantidad</label>
                <input type="number" value="1" step="1" min="1" max="100"
                    class="border-2 rounded outline-none p-2" id="cantidad">

                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                    class="w-full bg-blue-600 rounded bg-primary p-2  mt-4 font-semibold leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                    Comprar ahora
                </button>
            </div>
        </div>

        <div class="md:mt-16 mt-8">
            <h3 class="text-xl font-semibold pb-3 border-b-2">Productos similares</h3>

            <div class="splide" id="splide-1">
                <div class="splide__arrows">
                    <button class="bg-gray-900 shadow splide__arrow splide__arrow--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </button>
                    <button class="bg-gray-900 shadow splide__arrow splide__arrow--next">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </button>
                </div>
                <div class="splide__track my-4">
                    <ul class="splide__list">

                        <li class=" w-full splide__slide">
                            <div class="border-2 border-gray-200 bg-white rounded-xl shadow p-3 sm:mx-2 mx-0 ">
                                <a href="{{ route('item') }}" class="block">
                                    <div class="flex flex-col justify-center items-center text-center ">
                                        <div class="w-full h-44 flex justify-center items-center">
                                            <img src="https://picsum.photos/80/100" alt="imagen item"
                                                class="object-contain h-full">
                                        </div>
                                        <p class="text-sm pt-5 px-1 text-sky-900 h-24 hover:underline cursor-pointer">
                                            English File Fourth Edition Student Book Pack Intermediate Plus
                                        </p>
                                        <p class="block text-start text-xs font-bold mb-2">
                                            ISBN: <span class="font-normal">9780194720168</span>
                                        </p>
                                        <p class="text-2xl font-bold text-gray-800">
                                            S/ 48
                                        </p>
                                    </div>
                                </a>
                                <button type="submit"
                                    class="rounded bg-sky-700 py-2 w-full text-white mt-4 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                    <p class="ms-2 cursor-pointer">Añadir al carrito</p>
                                </button>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js-scripts')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script>
        const splide1 = new Splide('#splide-1', {
            perPage: 5,
            breakpoints: {
                640: {
                    perPage: 1,
                },
                880: {
                    perPage: 2,
                },
                1100: {
                    perPage: 3
                },
                1300: {
                    perPage: 4
                }
            },
        });

        splide1.mount();
    </script>
@endpush
