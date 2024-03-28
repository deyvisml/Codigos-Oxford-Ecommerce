@extends('layouts.app')

@section('title')
    Códigos y Licencias Oxford ✔️
@endsection

@push('headers')
    <meta name="description" content="Encuentra los códigos y licencias para tus libros Oxford (OUP). Estos códigos te brindarán acceso a recursos como el Online Practice y e-books de colecciones como English File, American English File, Headway, ¡y muchas más!">

    <meta property="og:title" content="Códigos Oxford" />

    <!-- WebSite structured data (datos estructurados) -->
    <script type="application/ld+json">
        {
          "@context" : "https://schema.org",
          "@type" : "WebSite",
          "name" : "Códigos Oxford",
          "url" : "https://codigosoxford.com/",
          "image": "{{ asset('images/icons/favicon-192x192.png') }}",
          "description": "Encuentra los códigos y licencias para tus libros Oxford (OUP). Estos códigos te brindarán acceso a recursos como el Online Practice y e-books de colecciones como English File, American English File, Headway, ¡y muchas más!"
        }
    </script>
@endpush

@push('css-scripts')
    <link rel="stylesheet" href="{{ asset('libs/splide/splide.min.css') }}">

    <style>
        .splide__pagination {
            visibility: hidden !important;
            bottom: -20px !important;
        }

        @media (min-width: 640px) {
            .splide__pagination {
                visibility: visible !important;
            }
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
    <div id="carouselExampleCaptions" class="relative md:h-80 sm:h-72 h-44" data-te-carousel-init data-te-carousel-slide>
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
                <img src="{{ asset('images/carousel-images/image1.jpg') }}" class="object-cover w-full h-full"
                    alt="imagen promocional" title="promocion"/>
                <div class="absolute inset-x-[15%] bottom-10 py-5 text-center text-white block">
                    <h1 class="sm:text-2xl text-base sm:block hidden font-bold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">
                        Códigos Oxford
                    </h1>
                    <p class="sm:text-base text-sm drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">
                        Adquiere tus códigos y licencias digitales de Oxford University Press (OUP).
                    </p>
                </div>
            </div>

            <!--Second item-->
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-item style="backface-visibility: hidden">
                <img src="{{ asset('images/carousel-images/image2.jpg') }}" class="object-cover w-full h-full"
                    alt="imagen promocional" title="promocion"/>
                <div class="absolute inset-x-[15%] bottom-10 py-5 text-center text-white block">
                    <h2 class="sm:text-2xl text-base font-bold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">Online Practice
                    </h2>
                    <p class="sm:text-base text-sm drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">
                        Adquiere códigos y licencias digitales para el Online Practice.
                    </p>
                </div>
            </div>

            <!--Third item-->
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none h-full"
                data-te-carousel-item style="backface-visibility: hidden">
                <img src="{{ asset('images/carousel-images/image3.jpg') }}" class="object-cover w-full h-full"
                    alt="imagen promocional" title="promocion"/>
                <div class="absolute inset-x-[15%] bottom-10 py-5 text-center text-white block">
                    <h2 class="sm:text-2xl text-base font-bold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">Oxford Learner’s
                        Bookshelf
                    </h2>
                    <p class="sm:text-base text-sm drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">
                        Adquiere códigos y licencias digitales para el Student Book y el Workbook en formato e-book
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Carousel imagenes -->

    <div class="bg-slate-200 border">
        <div class="max-w-7xl mx-auto px-2">
            <div
                class="flex flex-wrap items-center p-5 my-8 bg-white shadow  border-s-4 border-sky-600 gap-x-10 gap-y-5">
                <p class="block text-xl">Formas de pago</p>

                <ul class="flex flex-wrap items-center justify-start gap-5 md:gap-16 md:justify-around">
                    <li>
                        <img class="h-8 rounded md:h-10" src="{{ asset('images/banks-logos/paypal.png') }}" alt="imagen de forma de pago" title="forma de pago">
                    </li>
                    <li>
                        <img class="h-8 rounded md:h-10" src="{{ asset('images/banks-logos/visa.png') }}" alt="imagen de forma de pago" title="forma de pago">
                    </li>
                    <li>
                        <img class="h-8 rounded md:h-10" src="{{ asset('images/banks-logos/mastercard.png') }}" alt="imagen de forma de pago" title="forma de pago">
                    </li>
                    <li>
                        <img class="h-8 rounded md:h-10" src="{{ asset('images/banks-logos/american-express.png') }}" alt="imagen de forma de pago" title="forma de pago">
                    </li>
                    <!--<li>
                        <img class="h-8 rounded md:h-10"
                            src="https://d2a95c7k4laywg.cloudfront.net/wp-content/uploads/2021/03/bcp-logo-300x117.png"
                            alt="">
                    </li>
                    <li>
                        <img class="h-8 rounded md:h-10"
                            src="https://yt3.googleusercontent.com/l048nvZUXxmhjaDjxdJntZWSj03oOAK0ETKCQZup-Ea-aM_h8M94Jz87cw8JiwCHSEbv8llH=s176-c-k-c0x00ffffff-no-rj"
                            alt="">
                    </li>-->
                </ul>
            </div>

            <div class="p-5  my-8 bg-white shadow  border-s-4 border-sky-600">
                <p class="block mb-3 font-semibold">Titulos o series</p>

                <ul class="flex flex-wrap justify-start gap-2 px-0 gap-y-3 sm:p-2">
                    @foreach ($series as $serie)
                        <li class="">
                            <a href="{{ route('home.serie', ['serie' => $serie]) }}" title="{{$serie->name}}"
                                class="px-2 py-1 text-xs uppercase bg-gray-200 border-2 border-gray-300 rounded-md hover:bg-gray-300">
                                {{ $serie->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="mb-20 ">
        @php
            $i = 1;
        @endphp
        @foreach ($group_products as $group_product)
            <div class="py-5  @php echo $i % 2 == 0 ? 'bg-gray-200' : 'bg-gray-100' @endphp ">
                <div class="max-w-7xl mx-auto px-2">
                    <a href="{{ route('home.serie', ['serie' => $group_product['serie']]) }}" title="{{$group_product['serie']->name}}"
                        class="cursor-pointer hover:underline decoration-gray-500">
                        <h2 class="inline text-2xl font-semibold text-gray-500 cursor-pointer" id="section1">
                            {{ $group_product['serie']->name }}
                        </h2>
                    </a>
                    <div class="splide" id="splide-{{ $i }}">
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
                        <div class="my-4 splide__track">
                            <ul class="splide__list">
                                @foreach ($group_product['products'] as $product)
                                    <li class="w-full splide__slide">
                                        <div
                                            class="mx-0 bg-white border-2 border-gray-200 shadow rounded-xl sm:mx-2 hover:shadow-xl">
                                            <a href="{{ route('products.index', ['product' => $product]) }}" title="{{$product->name}}"
                                                class="block p-3 cursor-pointer">
                                                <div class="flex flex-col items-center justify-center text-center ">
                                                    <div class="flex items-center justify-center w-full h-44">
                                                        <img src="{{ asset('images/products/' . basename($product->image)) }}"
                                                            alt="{{"imagen ". $product->name}}" title="{{$product->name}}" class="object-contain h-full max-w-[140px]">
                                                    </div>
    
                                                    <div class="w-full text-start">
                                                        <h3
                                                            class="h-24 pt-5 text-sm font-semibold cursor-pointer text-sky-900 hover:underline">
                                                            {{ $product->name }}
                                                        </h3>
                                                        <p
                                                            class="block mb-2 text-xs font-semibold text-gray-600 cursor-pointer text-start">
                                                            ISBN: <span class="font-normal">{{ $product->isbn }}</span>
                                                        </p>
                                                        <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                                            {{ number_format($product->price_usd, 2) }} USD
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $i++;
            @endphp
        @endforeach
    </div>
@endsection



@push('js-scripts')
    <script src="{{ asset('libs/splide/splide.min.js') }}"></script>

    <script>
        const num_group_products = @php echo count($group_products); @endphp;

        for (let i = 1; i <= num_group_products; i++) {
            const splide = new Splide(`#splide-${i}`, {
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
            splide.mount();
        }
    </script>
@endpush
