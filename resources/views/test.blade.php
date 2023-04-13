<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>




    <!--Button trigger vertically centered scrollable modal-->
    <button type="button"
        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
        data-te-toggle="modal" data-te-target="#exampleModalCenteredScrollable" data-te-ripple-init
        data-te-ripple-color="light">
        Vertically centered scrollable modal
    </button>


    <!--Verically centered scrollable modal-->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable"
        aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-white">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-gray-600"
                        id="exampleModalCenteredScrollableLabel">
                        Completar pago
                    </h5>
                    <!--Close button-->
                    <button type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!--Modal body-->
                <div class="relative p-4">

                    <div id="paypal-button-container">

                    </div>
                </div>

                <!--Modal footer-->
                <!--<div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button type="button"
                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
                    </button>
                    <button type="button"
                        class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Save changes
                    </button>
                </div>-->
            </div>
        </div>
    </div>

















    <div class="p-32">
        <p class="">Pagar 10 USD</p>
        <ul>
            <li x-data={open:false}>
                <button x-on:click="open = !open" class="my-5 p-2 px-5 bg-red-500 text-white rounded">
                    Paypal
                </button>

            </li>
        </ul>
    </div>

    <!-- Agrega el formulario oculto con el campo CSRF para la redirección -->
    <form id="hidden_redirect_form" method="post" action="/ruta_controller_test" class="hidden">
        <!-- Reemplaza "/ruta-del-controlador" con la ruta de tu controlador de Laravel -->
        @csrf
        <!-- Agrega el campo CSRF usando la directiva de Blade de Laravel -->
    </form>












    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>



    {{-- Paypal --}}
    <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency=USD"></script>

    <script>
        function init_paypal_button() {
            paypal.Buttons({
                style: {
                    shape: 'rect',
                    color: '',
                    layout: 'vertical',
                    label: 'pay',
                },

                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            "description": "Monday, September 27, 2021\n4 person scramble - \n includes entry fee, cart, prizes, lunch and social.",
                            "amount": {
                                "currency_code": "USD",
                                "value": 123
                            }
                        }]
                    });
                },

                onApprove: function(data, actions) {
                    /*return actions.order.capture().then(function(details) {
                        alert(details.payer.name.given_name +
                            'You have successfully paid for the event!' +
                            'If you have not already filled out the form, please do so.');
                    });*/

                    // Enviar el formulario oculto para la redirección
                    const hidden_redirect_form = document.getElementById('hidden_redirect_form');
                    console.log("hidden_redirect_form");
                    hidden_redirect_form.submit();
                },

                onError: function(err) {
                    console.log(err);
                }
            }).render('#paypal-button-container');
        }
        init_paypal_button();
    </script>

</body>


</html>
