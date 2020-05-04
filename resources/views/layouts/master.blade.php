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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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
    <script src="{{ asset("js/app.js") }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        // Jquery cart
        var subtotal = 0;
        
        $(document).ready(function(){

            toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': false,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}

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
                var id_color = $(this).data('color');
                $('tr').remove('.item-'+id);

                var action = '{{ route("cart.store") }}';
                var _token = $('meta[name="_token"]').attr('content');
                $.ajax({
                    type: "POST",
                    url: action,
                    data: {id:id,idColor:id_color},
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
        var id_color;
        // Seleccionar Color en el shop

        $('.li-color').on('click',function(){
            var idColorProduct = $(this).attr('id').replace('li-','');
            var liColor = $(this).parent().children();
            var bgColor = $(this).children().children().css('background-color');

            $.each(liColor, function(index, li){
                $(li).removeClass('selected');
            });

            $('#li-'+idColorProduct).addClass('selected');
            id_color = idColorProduct;
            $('#li-'+idColorProduct).children().css('border-color',bgColor);
        });

        // agregar al carrito

        $('.add-cart').on('click', function(e) {
            e.preventDefault();
            var id_orig = $(this).attr('id');
            var id = $(this).attr('id').replace('cart-', '');
            var action = '{{ route("cart.store") }}';
            var _token = $('meta[name="_token"]').attr('content');
            var liProducts = $('.li-color[data-product='+id+']'); // obtengo los colores del articulo para verificar si hay uno seleccionado
            if(liProducts.hasClass('selected')){
                $.ajax({
                    type: "POST",
                    url: action,
                    data: {id:id,idColor:id_color},
                    headers: {
                        'X-CSRF-TOKEN' : $('meta[name="_token"]').attr('content') 
                    },
                    success: function(msg){
                        console.log(msg.status); 
                        if(msg.status == 'ok'){
                            $(msg.id).addClass('exists');
                            $(msg.id).removeClass('color-gris');
                            $(msg.id).addClass('text-success');
                            $('#cant-cart').text(msg.cantidad); 
                        }
                        if(msg.status == 'deleted'){
                            $(msg.id).removeClass('text-success');
                            $(msg.id).removeClass('exists');
                            $(msg.id).addClass('color-gris');
                            if(msg.cantidad == 0){
                            msg.cantidad=null;
                            }
                            console.log(msg.cantidad);
                            $('#cant-cart').text(msg.cantidad);
                        }
                    },
                    error: function(msg){
                        console.log(msg);
                    }
                });
            }else{
                toastr["warning"]("Selecciona un color");
            }

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
