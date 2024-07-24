<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <script src="https://unpkg.com/@paypal/paypal-js@8.0.0/dist/iife/paypal-js.min.js"></script> --}}
    <script src="https://www.paypal.com/sdk/js?client-id={{ config('app')['paypal_id'] }}"></script>

    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="paypalButtons"></div>
    {{-- <script>
        window.paypalLoadScript({
            clientId: "{{config('app')['paypal_id']}}"
        }).then((paypal) => {
            paypal.Buttons().render("#paypalButtons");
        });
    </script> --}}

    <script>
        paypal.Buttons({
            createOrder: function(data, actions){
                return actions.order.create({
                    purchase_units:[
                        {
                            amount: {
                                value:50
                            }
                        }
                    ]
                })
            },
            onApprove: function(data, actions){
                // TODO send order to server
                console.log(data.orderID)
                axios.post('paypal-process-order/'+data.orderID)
            }
        }).render("#paypalButtons");
    </script>
</body>

</html>
