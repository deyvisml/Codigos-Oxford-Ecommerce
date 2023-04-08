@extends('layouts.app')

@section('title')
    Resultados
@endsection

@section('content')
    <div class="my-8 md:mx-32 sm:mx-10 mx-5">
        <div class="mb-5 border-b-2">
            <p class="text-2xl">Busqueda: <span class="font-semibold">oxford learn</span></p>
            <p class="py-2">103 resultados</p>
        </div>

        <div class="">
            <ul class="flex justify-start flex-wrap gap-x-3 gap-y-4">

                <li class="border-2 border-gray-200 bg-white rounded-xl shadow sm:w-60 w-full p-3 splide__slide">
                    <a href="" class="block">
                        <div class="flex flex-col justify-center items-center text-center ">
                            <div class="w-full h-44 flex justify-center items-center">
                                <img src="https://cf-aws.global.oup.com/covers/medium/9780194720168_medium.jpg"
                                    alt="imagen item" class="w-36 ">
                            </div>
                            <p class="text-sm pt-5 px-1 text-sky-900 h-24 hover:underline">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <p class="ms-2">Añadir al carrito</p>
                    </button>
                </li>

                <li class="border-2 border-gray-200 bg-white rounded-xl shadow sm:w-60 w-full p-3 splide__slide">
                    <a href="" class="block">
                        <div class="flex flex-col justify-center items-center text-center ">
                            <div class="w-full h-44 flex justify-center items-center">
                                <img src="https://cf-aws.global.oup.com/covers/medium/9780194720168_medium.jpg"
                                    alt="imagen item" class="w-36 ">
                            </div>
                            <p class="text-sm pt-5 px-1 text-sky-900 h-24 hover:underline">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <p class="ms-2">Añadir al carrito</p>
                    </button>
                </li>


                <li class="border-2 border-gray-200 bg-white rounded-xl shadow sm:w-60 w-full p-3 splide__slide">
                    <a href="" class="block">
                        <div class="flex flex-col justify-center items-center text-center ">
                            <div class="w-full h-44 flex justify-center items-center">
                                <img src="https://cf-aws.global.oup.com/covers/medium/9780194720168_medium.jpg"
                                    alt="imagen item" class="w-36 ">
                            </div>
                            <p class="text-sm pt-5 px-1 text-sky-900 h-24 hover:underline">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <p class="ms-2">Añadir al carrito</p>
                    </button>
                </li>

                <li class="border-2 border-gray-200 bg-white rounded-xl shadow sm:w-60 w-full p-3 splide__slide">
                    <a href="" class="block">
                        <div class="flex flex-col justify-center items-center text-center ">
                            <div class="w-full h-44 flex justify-center items-center">
                                <img src="https://cf-aws.global.oup.com/covers/medium/9780194720168_medium.jpg"
                                    alt="imagen item" class="w-36 ">
                            </div>
                            <p class="text-sm pt-5 px-1 text-sky-900 h-24 hover:underline">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <p class="ms-2">Añadir al carrito</p>
                    </button>
                </li>

                <li class="border-2 border-gray-200 bg-white rounded-xl shadow sm:w-60 w-full p-3 splide__slide">
                    <a href="" class="block">
                        <div class="flex flex-col justify-center items-center text-center ">
                            <div class="w-full h-44 flex justify-center items-center">
                                <img src="https://cf-aws.global.oup.com/covers/medium/9780194720168_medium.jpg"
                                    alt="imagen item" class="w-36 ">
                            </div>
                            <p class="text-sm pt-5 px-1 text-sky-900 h-24 hover:underline">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <p class="ms-2">Añadir al carrito</p>
                    </button>
                </li>

                <li class="border-2 border-gray-200 bg-white rounded-xl shadow sm:w-60 w-full p-3 splide__slide">
                    <a href="" class="block">
                        <div class="flex flex-col justify-center items-center text-center ">
                            <div class="w-full h-44 flex justify-center items-center">
                                <img src="https://cf-aws.global.oup.com/covers/medium/9780194720168_medium.jpg"
                                    alt="imagen item" class="w-36 ">
                            </div>
                            <p class="text-sm pt-5 px-1 text-sky-900 h-24 hover:underline">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <p class="ms-2">Añadir al carrito</p>
                    </button>
                </li>
            </ul>

            <nav aria-label="Page navigation example" class="my-8">
                <ul class="list-style-none flex justify-center">
                    <li>
                        <a class="relative block rounded bg-transparent px-3 py-1.5 text-lg text-neutral-600 transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li>
                        <a class="bg-sky-700 text-white relative block rounded bg-transparent px-3 py-1.5 text-lg  transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#">1</a>
                    </li>
                    <li aria-current="page">
                        <a class="relative block rounded bg-transparent px-3 py-1.5 text-lg text-neutral-600 transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#">2</a>
                    </li>
                    <li>
                        <a class="relative block rounded bg-transparent px-3 py-1.5 text-lg text-neutral-600 transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#">3</a>
                    </li>
                    <li>
                        <a class="relative block rounded bg-transparent px-3 py-1.5 text-lg text-neutral-600 transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
@endsection
