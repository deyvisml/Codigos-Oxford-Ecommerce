@extends('layouts.app')

@section('title')
    Instituciones
@endsection


@section('content')
    <div class="md:mx-32 sm:mx-10 my-8  mx-5">

        <div class="border-b-2 pb-5">
            <h3 class="text-2xl font-semibold mb-5">Seleccione su Institución</h3>

            <div class="mb-3 md:w-1/2 w-full">
                <select data-te-select-init>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
                <label data-te-select-label-ref>Institución</label>
            </div>
        </div>

        <div class="flex flex-wrap">
            <h3 class="text-xl block w-full font-semibold my-4">Niveles</h3>

            <div class="sm:w-1/4 min-w-[280px] w-full mb-4 border">
                <ul>
                    <li class="border-b-2  hover:bg-gray-200 bg-gray-50">
                        <a href="" class="block p-3">
                            Básico 1 - 6
                        </a>
                    </li>
                    <li class="border-b-2  hover:bg-gray-200 bg-gray-50">
                        <a href="" class="block p-3">
                            Intermedio
                        </a>
                    </li>
                    <li class="border-b-2  hover:bg-gray-200 bg-gray-200 rounded-s-2xl font-semibold">
                        <a href="" class="block p-3">
                            Superior
                        </a>
                    </li>
                    <li class="border-b-2  hover:bg-gray-200 bg-gray-50">
                        <a href="" class="block p-3">
                            Superior
                        </a>
                    </li>
                </ul>
            </div>

            <ul class="md:w-3/4 w-full flex justify-start flex-wrap gap-y-4 bg-gray-200 py-4 px-2">

                <li class="md:w-1/4 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="md:w-1/4 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="md:w-1/4 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="md:w-1/4 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="md:w-1/4 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>


    </div>
@endsection
