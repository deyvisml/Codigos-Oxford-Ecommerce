@extends('layouts.app')

@section('title')
    Instituciones
@endsection

@push('headers')
    <meta property="og:title" content="{{ $current_school->name }} - Códigos Oxford" />
@endpush

@section('content')
    <div class="mx-5 my-8 mb-20 md:mx-32 sm:mx-10">

        <div class="pb-5 border-b-2">
            <h3 class="mb-5 text-2xl font-semibold">Seleccione su escuela</h3>

            <div class="w-full mb-3 md:w-1/2">

                <select data-te-select-init id="select_schools" name="miselect" size="10">
                    @foreach ($schools as $school)
                        <option class="{{ $current_school->id }}"
                            value="{{ route('schools.show', ['country' => $country, 'school' => $school]) }}"
                            {{ $school->id === $current_school->id ? 'selected' : '' }}>
                            {{ $school->name }}
                        </option>
                    @endforeach
                </select>
                <label data-te-select-label-ref>Institución</label>

            </div>
        </div>

        <div class="flex flex-wrap">
            <h3 class="block w-full my-4 text-xl font-semibold">Niveles</h3>

            <div class="sm:w-1/4 min-w-[280px] w-full mb-4 border">
                <ul id="school_list_ul">
                    @php
                        $first_time = true;
                    @endphp
                    @foreach ($school_levels as $school_level)
                        @if ($first_time)
                            <li data-level-id="{{ $school_level->id }}"
                                class="p-3 bg-gray-200 border-b-2 cursor-pointer school_level_li hover:bg-gray-200">
                                {{ $school_level->name }}
                            </li>
                            {{ $first_time = false }}
                        @else
                            <li data-level-id="{{ $school_level->id }}"
                                class="p-3 border-b-2 cursor-pointer school_level_li hover:bg-gray-200 bg-gray-50">
                                {{ $school_level->name }}
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="md:w-3/4 w-full bg-gray-200 py-4 px-2 md:min-h-[390px] self-baseline">
                @php
                    $first_time = true;
                @endphp


                @foreach ($product_groups as $product_group)
                    @if ($first_time)
                        <ul id="products_level_{{ $product_group['school_level']->id }}"
                            class="flex flex-wrap justify-start w-full border-2 products_level gap-y-4">
                            @if (count($product_group['products']) > 0)
                                @foreach ($product_group['products'] as $product)
                                    <li class="md:w-1/4 sm:w-1/2 w-full min-w-[200px]">
                                        <div
                                            class="mx-0 bg-white border-2 border-gray-200 shadow rounded-xl sm:mx-2 hover:shadow-xl">
                                            <a href="{{ route('products.index', ['product' => $product]) }}"
                                                class="block p-3 cursor-pointer">
                                                <div class="flex flex-col items-center justify-center text-center ">
                                                    <div class="flex items-center justify-center w-full h-44">
                                                        <img src="{{ asset('images/products/' . basename($product->image)) }}"
                                                            alt="imagen item" class="object-contain h-full max-w-[140px]">
                                                    </div>

                                                    <div class="w-full text-start">
                                                        <p
                                                            class="h-24 pt-5 text-sm font-semibold cursor-pointer text-sky-900 hover:underline">
                                                            {{ $product->name }}
                                                        </p>
                                                        <p
                                                            class="block mb-2 text-xs font-semibold text-gray-600 cursor-pointer text-start">
                                                            ISBN: <span class="font-normal">{{ $product->isbn }}</span>
                                                        </p>
                                                        <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                                            {{ $product->price_usd }} USD
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <p class="mx-0 sm:mx-2">Sin productos</p>
                            @endif
                        </ul>
                        {{ $first_time = false }}
                    @else
                        <ul id="products_level_{{ $product_group['school_level']->id }}"
                            class="flex-wrap justify-start hidden w-full border-2 products_level gap-y-4">
                            @if (count($product_group['products']) > 0)
                                @foreach ($product_group['products'] as $product)
                                    <li class="md:w-1/4 sm:w-1/2 w-full min-w-[200px]">
                                        <div
                                            class="mx-0 bg-white border-2 border-gray-200 shadow rounded-xl sm:mx-2 hover:shadow-xl">
                                            <a href="{{ route('products.index', ['product' => $product]) }}"
                                                class="block p-3 cursor-pointer">
                                                <div class="flex flex-col items-center justify-center text-center ">
                                                    <div class="flex items-center justify-center w-full h-44">
                                                        <img src="{{ asset('images/products/' . basename($product->image)) }}"
                                                            alt="imagen item" class="object-contain h-full max-w-[140px]">
                                                    </div>

                                                    <div class="w-full text-start">
                                                        <p
                                                            class="h-24 pt-5 text-sm font-semibold cursor-pointer text-sky-900 hover:underline">
                                                            {{ $product->name }}
                                                        </p>
                                                        <p
                                                            class="block mb-2 text-xs font-semibold text-gray-600 cursor-pointer text-start">
                                                            ISBN: <span class="font-normal">{{ $product->isbn }}</span>
                                                        </p>
                                                        <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                                            {{ $product->price_usd }} USD
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <p class="mx-0 sm:mx-2">Sin productos</p>
                            @endif
                        </ul>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('js-scripts')
    <script>
        const select_schools_element = document.querySelector("#select_schools");

        select_schools_element.addEventListener("change", function() {
            const url = this.value;

            console.log(this);

            window.location.href = url;
        });


        // Obtén el elemento padre que contiene todos los elementos <li>
        var school_levels_container = document.querySelector('#school_list_ul');

        // Agrega un evento de clic al elemento padre
        school_levels_container.addEventListener('click', function(event) {
            // Verifica que el evento de clic se haya originado en un elemento <li>
            if (event.target.classList.contains('school_level_li')) {
                // Obtiene el valor del atributo data-id del elemento <li> clicado
                const level_id = event.target.getAttribute('data-level-id');

                // SELECTED LEVEL

                // deselected the current li level
                const level_to_deseleced = document.querySelector(`.school_level_li.bg-gray-200`);
                level_to_deseleced?.classList.remove("bg-gray-200");
                level_to_deseleced?.classList.add("bg-gray-50");

                // select the new level
                const level_to_seleced = event.target;
                level_to_seleced.classList?.remove("bg-gray-50");
                level_to_seleced.classList?.add("bg-gray-200");

                // SHOW PRODUCTS

                // hiden the current produts of a level
                const products_level_to_hidden = document.querySelector(`.products_level:not(.hidden)`);
                products_level_to_hidden?.classList.add("hidden");

                // showhing the products for the new selected level
                const products_level_to_show = document.querySelector(`#products_level_${level_id}`);
                products_level_to_show?.classList.add("flex");
                products_level_to_show?.classList.remove("hidden");
            }
        });
    </script>
@endpush
