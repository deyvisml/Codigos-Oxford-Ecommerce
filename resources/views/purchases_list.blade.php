@extends('layouts.app')

@section('title')
    Mis compras
@endsection

@section('content')
    <div class="bg-neutral-100 pb-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="py-8 mb-20  min-h-screen">

                <h2 class="text-2xl font-semibold border-b-2 pb-3">
                    Compras
                </h2>

                @if (count($orders) > 0)
                    <p class="p-2 border rounded border-neutral-300 bg-blue-100 text-blue-800 mt-5">
                        <span class="font-semibold">Nota 1:</span> Si el estado del pedido ya marca como "ENTREGADO", verifica tu bandeja de entrada y la carpeta de <b>SPAM</b>, en otro caso espere a que el pedido sea procesado por el administrador.
                    </p>

                    <p class="p-2 border rounded border-neutral-300 bg-blue-100 text-blue-800 mt-5">
                        <span class="font-semibold">Nota 2:</span> Si eres de Perú recuerda que puedes realizar tus proximas compras por Whatsapp al <a href="https://wa.me/51938544411" target="_blank" class="underline text-sky-800">+51 938 544 411</a>
                    </p>
                @endif
    
                <ul class="mt-5">
                    @if (count($orders) > 0)
                        @foreach ($orders as $order)
                            <li class="bg-white rounded border shadow mb-4">
                                <div class="p-3 py-4 font-bold border-b-2 text-xs">
                                    {{ \Carbon\Carbon::parse($order['data']->created_at)->format('j \d\e F \d\e Y') }}
    
                                </div>
                                <div class="flex p-3 py-4 w-full sm:flex-nowrap flex-wrap">
                                    <div
                                        class="sm:w-28 h-28 p-2 sm:mb-0 mb-2 me-4 flex justify-center items-center border self-center w-full">
                                        <img src="{{ $order['product']->image }}" alt="imagen producto" title="{{$order['product']->name}}"
                                            class="object-contain h-full max-w-[70px]">
                                    </div>
                                    <div class="text-sm md:w-3/4 w-full">
                                        <p class="pb-1 text-neutral-600">#{{ $order['data']->id }}</p>
                                        <p class="pb-1 flex items-end gap-x-2">Estado:
                                            @if ($order['data']->payment_issue)
                                                <span class="bg-red-600 rounded p-0.5 px-1 text-xs text-white font-semibold">
                                                    Pago rechazado
                                                </span>
                                            @elseif ($order['data']->email_sent)
                                                <span class="bg-green-600 rounded p-0.5 px-1 text-xs text-white font-semibold">
                                                    Entregado
                                                </span>
                                            @else
                                                <span class="bg-blue-600 rounded p-0.5 px-1 text-xs text-white font-semibold">
                                                    Pendiente
                                                </span>
                                            @endif
                                        </p>
                                        <ul class="flex justify-between items-start sm:flex-nowrap flex-wrap">
                                            <li class="sm:w-3/5 w-full mb-2">
                                                <p class="font-bold py-1">Elemento</p>
                                                <a href="{{ route('products.index', ['product' => $order['product']]) }}" title="{{$order['product']->name}}"
                                                    class="underline cursor-pointer text-sky-800">
                                                    {{ $order['product']->name }}
                                                </a>
                                            </li>
                                            <li class="sm:text-right text-left sm:w-1/5 w-full mb-2">
                                                <p class="font-bold py-1">Cantidad</p>
                                                <p>{{ $order['data']->quantity }}</p>
                                            </li>
                                            <li class="sm:text-right text-left sm:w-1/5 w-full mb-2">
                                                <p class="font-bold py-1">Total</p>
                                                <p>{{ $order['data']->user_paid }} usd</p>
                                            </li>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <p class="text-center">Lista de compras vacia.</p>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
