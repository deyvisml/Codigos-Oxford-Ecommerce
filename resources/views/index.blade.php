@extends('layouts.app')

@section('title')
    Inicio
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
    <!-- Carousel imagenes -->

    <div id="carouselExampleCaptions" class="relative md:h-80 h-72" data-te-carousel-init data-te-carousel-slide>
        <!--Carousel indicators-->
        <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
            data-te-carousel-indicators>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" data-te-carousel-active
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
        </div>

        <!--Carousel items-->
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] h-full">
            <!--First item-->
            <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg" class="w-full h-full object-cover"
                    alt="..." />
                <div class="absolute inset-x-[15%] bottom-10 py-5 text-center text-white block">
                    <h1 class="text-2xl font-bold">Códigos Ingles</h1>
                    <p>
                        Adquiere tus códigos, licencias, libros digitales para las plataformas Oxford
                    </p>
                </div>
            </div>

            <!--Second item-->
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-item style="backface-visibility: hidden">
                <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg" class="w-full h-full object-cover"
                    alt="..." />
                <div class="absolute inset-x-[15%] bottom-10 py-5 text-center text-white block">
                    <h1 class="text-2xl font-bold">Códigos Ingles</h1>
                    <p>
                        Adquiere tus códigos, licencias, libros digitales para las plataformas Oxford
                    </p>
                </div>
            </div>

            <!--Third item-->
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-item style="backface-visibility: hidden">
                <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(24).jpg" class="w-full h-full object-cover"
                    alt="..." />
                <div class="absolute inset-x-[15%] bottom-10 py-5 text-center text-white block">
                    <h1 class="text-2xl font-bold">Códigos Ingles</h1>
                    <p>
                        Adquiere tus códigos, licencias, libros digitales para las plataformas Oxford
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- END Carousel imagenes -->

    <div class="bg-gray-200 border">
        <div
            class="my-8 md:mx-32 sm:mx-10 mx-5 bg-white border-s-8 border-sky-600 flex items-center flex-wrap p-5 gap-x-10 gap-y-5 shadow">
            <p class="block text-xl">Formas de pago</p>

            <ul class="flex flex-wrap md:gap-16 gap-5 md:justify-around justify-start items-center">
                <li><img class="md:h-10 h-8 rounded"
                        src="https://brifly-media.s3.ap-south-1.amazonaws.com/s3fs-public/styles/large/public/article/2020-10/Paypal.png?itok=XofbtBOA"
                        alt=""></li>
                <li><img class="md:h-10 h-8 rounded" src="https://www.b-payment.com/docs/images/logos/Visa_logo.png"
                        alt="">
                </li>
                <li><img class="md:h-10 h-8 rounded"
                        src="https://scontent.faqp2-1.fna.fbcdn.net/v/t1.6435-9/64334091_271020363714449_402647682146893824_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=e3f864&_nc_ohc=-YfXkZchU6EAX_vdLAb&_nc_ht=scontent.faqp2-1.fna&oh=00_AfAR-EFdM1FiS-Yf6FId_-GJ_zLVb2MLu1WJ64jh_yJqug&oe=6457A62A"
                        alt="">
                </li>
                <li><img class="md:h-10 h-8 rounded"
                        src="https://d2a95c7k4laywg.cloudfront.net/wp-content/uploads/2021/03/bcp-logo-300x117.png"
                        alt=""></li>
                <li><img class="md:h-10 h-8 rounded"
                        src="https://yt3.googleusercontent.com/l048nvZUXxmhjaDjxdJntZWSj03oOAK0ETKCQZup-Ea-aM_h8M94Jz87cw8JiwCHSEbv8llH=s176-c-k-c0x00ffffff-no-rj"
                        alt=""></li>

                <li><img class="md:h-10 h-8 rounded"
                        src="https://seeklogo.com/images/P/plin-logo-967A4AF583-seeklogo.com.png" alt="">
                </li>
            </ul>
        </div>
    </div>



    <div class="bg-gray-100">
        <div class="py-5 md:px-32 px-10  bg-gray-50">
            <a href="" class="hover:underline cursor-pointer decoration-gray-500">
                <h2 class="text-2xl font-semibold text-gray-500 cursor-pointer inline" id="section1">
                    Oxford Online Skills Program
                </h2>
            </a>
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


        <div class="py-5 md:px-32 px-10  bg-gray-100">
            <a href="" class="hover:underline cursor-pointer decoration-gray-500">
                <h2 class="text-2xl font-semibold text-gray-500 cursor-pointer inline" id="section1">
                    Oxford Online Skills Program
                </h2>
            </a>
            <div class="splide" id="splide-2">
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


        const splide2 = new Splide('#splide-2', {
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

        splide2.mount();
    </script>
@endpush
