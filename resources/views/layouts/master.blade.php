<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"
        integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylehome.css')}}">

    <link rel="shortcut icon" href="img/icons/rueda.svg">


    <title> @yield('title') </title>
</head>

<body>

    @include ('includes.header')


        @yield('content')


    @include('includes.footer')

    {{-- Script js jquery --}}
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        // Jquery cart
        var subtotal = 0;
        $(document).ready(function(){

            var prices = $('.price');
            $.each(prices, function(index,price){
                subtotal += parseInt( $(price).text().replace('$','') );
            });
            $('.subtotal').text('$'+subtotal);
            $('.total').text('$'+(subtotal+500));
            $('#check-amt').text('$'+(subtotal+500));

            $('.delete-cart').on('click',function(e){
                e.preventDefault();
                var id = $(this).attr('id');
                $('tr').remove('.item-'+id);

                var action = '{{ route("cart.store") }}';
                var _token = $('meta[name="_token"]').attr('content');
                $.ajax({
                    type: "POST",
                    url: action,
                    data: {id:id},
                    headers: {
                        'X-CSRF-TOKEN' : $('meta[name="_token"]').attr('content') 
                    },
                    success: function(msg){
                        console.log(msg.status); 
                        if(msg.status == 'deleted'){
                            if(msg.cantidad == 0){
                                msg.cantidad=null;
                            }
                            $('#cant-cart').text(msg.cantidad);
                            location.reload();
                        }
                    },
                    error: function(msg){
                        console.log(msg);
                    /*  $(msg.id).attr('data-original-title', 'Error').tooltip('show'); */
                    }
                });

                console.log();
            });

        });

        // Seleccionar Color

        $('.iconCheck').on('click',function(){
            var idColorProduct = $(this).attr('id').replace('check-','');
            var iconsColor = $(this).parent().children().children();
            $.each(iconsColor, function(index, span){
                if ($(span).hasClass("check")){
                    $(span).removeClass("check-ok");
                }
            });
            $('#'+idColorProduct).addClass('check-ok');
        });

        // Sumar y restar items
        $('.btn-sumar').on('click',function(e){
            var id = $(this).attr('id');
            var cant = $('#cant-'+id).text();
            var price =parseInt( $('#price-'+id).text().replace('$', '') );
            subtotal = subtotal + price;
            cant++;
            $('.subtotal').text('$'+subtotal);
            $('.total').text('$'+(subtotal+500));
            $('#check-amt').text('$'+(subtotal+500));
            $('#cant-'+id).text(cant);
        });

        $('.btn-restar').on('click',function(e){
            var id = $(this).attr('id');
            var cant = $('#cant-'+id).text();
            var price =parseInt( $('#price-'+id).text().replace('$', '') );
            if(cant > 1){
                cant--;
                subtotal = subtotal - price;
            }
            $('.subtotal').text('$'+subtotal);
            $('.total').text('$'+(subtotal+500));
            $('#check-amt').text('$'+(subtotal+500));
            $('#cant-'+id).text(cant);
            formCantidad = cant;
        });

        // fin cart
</script>

<script>
        // Shop

        $('.add-cart').on('click', function(e) {
            e.preventDefault();
            var id_orig = $(this).attr('id');
            var id = $(this).attr('id').replace('cart-', '');
            var action = '{{ route("cart.store") }}';
            var _token = $('meta[name="_token"]').attr('content');
            $.ajax({
                type: "POST",
                url: action,
                data: {id:id},
                headers: {
                    'X-CSRF-TOKEN' : $('meta[name="_token"]').attr('content') 
                },
                success: function(msg){
                    console.log(msg.status); 
                    if(msg.status == 'ok'){
                        $(msg.id).addClass('exists');
                        $(msg.id).removeClass('color-gris');
                        $(msg.id).addClass('text-success');
                        /*$(msg.id).attr('data-original-title', msg.text).tooltip('show');*/
                        $('#cant-cart').text(msg.cantidad); 
                    }
                    if(msg.status == 'deleted'){
                        $(msg.id).removeClass('text-success');
                        $(msg.id).removeClass('exists');
                        $(msg.id).addClass('color-gris');
                       /* $(msg.id).attr('data-original-title', msg.text).tooltip('show');*/
                       if(msg.cantidad == 0){
                        msg.cantidad=null;
                       }
                        $('#cant-cart').text(msg.cantidad);
                    }
                },
                error: function(msg){
                    console.log(msg);
                   /*  $(msg.id).attr('data-original-title', 'Error').tooltip('show'); */
                }
            });
        });
    </script>

    
    <!---JavaScript Toggle--->
    <script type="text/javascript">
    function ShowHide(EditComment) {
        var EditedComment = document.getElementById("EditedComment");
        if (EditComment.value == "Editar") {
            EditedComment.style.display = "block";
            EditComment.value = "Editando";
        } else {
            EditedComment.style.display = "none";
            EditComment.value = "Editar";
        }
    }
    </script>
    
</body>

</html>
