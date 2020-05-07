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
   

   {{-- Validacion Registro --}}
<script>
     //Register 
    window.addEventListener('load', function (){ 

   
        var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        var registerForm = document.getElementById("register-form");
        var nameField = document.getElementById("name");
        var surnameField = document.getElementById("surname");
        var emailField = document.getElementById("email");
        var passwordField = document.getElementById("password");
        var passwordConfirmField = document.getElementById("password-confirm");
       
      

        function nuevoSpan(parentNode, campo, mensajeSpan){
            var parent = document.querySelector(parentNode)
            var span = document.createElement('span');
            span.className = campo + " d-none";
            var mensaje =  document.createTextNode(mensajeSpan);
            span.append(mensaje);
            parent.appendChild(span);
        }
       
        nuevoSpan('.parent-input-name', 'errorName' , 'Debe completar con su nombre');

            nameField.addEventListener('input', function (){
            var spanName = document.querySelector('.errorName');
                if (nameField.value.trim() === '' ) {
                    nameField.className = 'form-control invalid';
                    spanName.className = 'errorName d-block';
                    spanName.classList.add('invalid-field');

                } else {
                    nameField.className = "form-control valid";
                    spanName.className = "errorName d-none";
                    }

            })
            
            nameField.addEventListener('blur', function (){
            var spanName = document.querySelector('.errorName');
                if (nameField.value.trim() === '' ) {
                    nameField.className = 'form-control invalid';
                    spanName.className = 'errorName d-block';
                    spanName.classList.add('invalid-field');
                    spanName.innerHTML = 'Debe completar con su nombre';

                } else if(nameField.value.trim().length < 3){

                    nameField.className = 'form-control invalid';
                    spanName.className = 'errorName d-block';
                    spanName.classList.add('invalid-field');
                    spanName.innerHTML = 'El campo debe tener más de 3 letras';

                }else {
                    nameField.className = "form-control valid";
                    spanName.className = "errorName d-none";
                    }
            })
            
        nuevoSpan('.parent-input-surname', 'errorSurname' , 'Debe completar con su apellido');

            surnameField.addEventListener('input', function (){
            var spanSurname = document.querySelector('.errorSurname');
                if (surnameField.value.trim() === '' ) {
                    surnameField.className = 'form-control invalid';
                    spanSurname.className = 'errorSurname d-block';
                    spanSurname.classList.add('invalid-field');

                } else {
                    surnameField.className = "form-control valid";
                    spanSurname.className = "errorSurname d-none";
                    }
            })
            
            surnameField.addEventListener('blur', function (){
            var spanSurname = document.querySelector('.errorSurname');
                if (surnameField.value.trim() === '' ) {
                    surnameField.className = 'form-control invalid';
                    spanSurname.className = 'errorSurname d-block';
                    spanSurname.classList.add('invalid-field');
                    spanSurname.innerHTML = 'Debe completar con su apellido';

                } else if(surnameField.value.trim().length < 3){

                    surnameField.className = 'form-control invalid';
                    spanSurname.className = 'errorSurname d-block';
                    spanSurname.classList.add('invalid-field');
                    spanSurname.innerHTML = 'El campo debe tener más de 3 letras';
                
                }else {
                    surnameField.className = "form-control valid";
                    spanSurname.className = "errorSurname d-none";
                    }
            })
            
        nuevoSpan('.parent-input-email', 'errorEmail' , 'Debe ingresar su e-mail');

            emailField.addEventListener('input', function (){
            var spanEmail = document.querySelector('.errorEmail');
                if (emailField.value.trim() === '' ) {
                    emailField.className = 'form-control invalid';
                    spanEmail.className = 'errorEmail d-block';
                    spanEmail.classList.add('invalid-field');
                    spanEmail.innerHTML = 'Debe ingresar su e-mail';
                } else {
                        emailField.className = "form-control valid";
                        spanEmail.className = "errorEmail d-none";
                    }  
            })
            
            emailField.addEventListener('blur', function (){
            var spanEmail = document.querySelector('.errorEmail');
                if (emailField.value.trim() === '' ) {
                    emailField.className = 'form-control invalid';
                    spanEmail.className = 'errorEmail d-block';
                    spanEmail.classList.add('invalid-field');
                    spanEmail.innerHTML = 'Debe ingresar su e-mail';
                } else {
                        emailField.className = "form-control valid";
                        spanEmail.className = "errorEmail d-none";
                    }  
            })
            
            emailField.addEventListener('blur', function () {
                var spanEmail = document.querySelector('.errorEmail');
                if(emailField.value.trim().length != 0 && !regexEmail.test(emailField.value)){
                        emailField.className = 'form-control invalid';
                        spanEmail.className = 'errorEmail d-block';
                        spanEmail.classList.add('invalid-field');
                        spanEmail.innerHTML = 'El e-mail ingresado es invalido';
                    } 
                   
                })

        nuevoSpan('.parent-input-password', 'errorPassword' , 'Debe ingresar una contraseña');

            passwordField.addEventListener('input', function (){ 
                var spanPassword = document.querySelector('.errorPassword');
                    if (passwordField.value.trim() === '' ) {
                        passwordField.className = 'form-control invalid';
                        spanPassword.className = 'errorPassword d-block';
                        spanPassword.classList.add('invalid-field');
                        spanPassword.innerHTML = 'Debe ingresar una contraseña';
                    } else {
                        passwordField.className = "form-control valid";
                        spanPassword.className = "errorPassword d-none";
                        }  
            })
                
            passwordField.addEventListener('blur', function (){ 
                var spanPassword = document.querySelector('.errorPassword');
                    if (passwordField.value.trim() === '' ) {
                    passwordField.className = 'form-control invalid';
                    spanPassword.className = 'errorPassword d-block';
                    spanPassword.classList.add('invalid-field');
                    spanPassword.innerHTML = 'Debe ingresar una contraseña';
                } else {
                        passwordField.className = "form-control valid";
                        spanPassword.className = "errorPassword d-none";
                    }  
                    
            })

            passwordField.addEventListener('blur', function () {
            var spanPassword = document.querySelector('.errorPassword');
            if(passwordField.value.trim().length != 0 &&  passwordField.value.trim().length < 8){
                    passwordField.className = 'form-control invalid';
                    spanPassword.className = 'errorPassword d-block';
                    spanPassword.classList.add('invalid-field');
                    spanPassword.innerHTML = 'Tu contraseña debe tener al menos 8 caracteres';
                } 
                
            })

        nuevoSpan('.parent-input-password-confirm', 'errorPasswordConfirm' , 'Ingresa nuevamente tu clave');

            passwordConfirmField.addEventListener('blur', function (){
                var spanPasswordConfirm = document.querySelector('.errorPasswordConfirm');
                    if (passwordConfirmField.value.trim() === '' ) {
                    passwordConfirmField.className = 'form-control invalid';
                    spanPasswordConfirm.className = 'errorPasswordConfirm d-block';
                    spanPasswordConfirm.classList.add('invalid-field');
                    spanPasswordConfirm.innerHTML = 'Ingresa nuevamente tu clave';

                } else if(passwordConfirmField.value.trim() != passwordField.value.trim()){
                    passwordConfirmField.className = 'form-control invalid';
                    spanPasswordConfirm.className = 'errorPasswordConfirm d-block';
                    spanPasswordConfirm.classList.add('invalid-field');
                    spanPasswordConfirm.innerHTML = 'La contraseña de verificación no coincide';

                } else {
                        passwordConfirmField.className = "form-control valid";
                        spanPasswordConfirm.className = "errorPasswordConfirm d-none";
                    }  
                    console.log(spanPasswordConfirm);
            })

            
    
        registerForm.onsubmit = function (event){
           
            if(nameField.value.trim() == '' || surnameField.value.trim() === '' || emailField.value.trim() === '' || passwordField.value.trim() === '' || !regexEmail.test(emailField.value)){
                event.preventDefault(); 
                if (nameField.value.trim() === ''){
                    var spanName = document.querySelector('.errorName');
                        nameField.className = 'form-control invalid';
                        spanName.className = 'errorName d-block';
                        spanName.classList.add('invalid-field');

                } else if (surnameField.value.trim() === ''){
                    var spanSurname = document.querySelector('.errorSurname');
                        surnameField.className = 'form-control invalid';
                        spanSurname.className = 'errorSurname d-block';
                        spanSurname.classList.add('invalid-field');

                } else if (emailField.value.trim() === ''){
                    var spanEmail = document.querySelector('.errorEmail');
                        emailField.className = 'form-control invalid';
                        spanEmail.className = 'errorEmail d-block';
                        spanEmail.classList.add('invalid-field');

                } else if (passwordField.value.trim() === ''){   
                    var spanPassword = document.querySelector('.errorPassword');
                        passwordField.className = 'form-control invalid';
                        spanPassword.className = 'errorPassword d-block';
                        spanPassword.classList.add('invalid-field');

                }   else if (!regexEmail.test(emailField.value)){   
                    var spanEmail = document.querySelector('.errorEmail');
                        emailField.className = 'form-control invalid';
                        spanEmail.className = 'errorEmail d-block';
                        spanEmail.classList.add('invalid-field');
                        spanEmail.innerHTML = 'El e-mail ingresado no es valido';

                }   else if (!regexEmail.test(emailField.value)){   
                var spanEmail = document.querySelector('.errorEmail');
                    emailField.className = 'form-control invalid';
                    spanEmail.className = 'errorEmail d-block';
                    spanEmail.classList.add('invalid-field');
                    spanEmail.innerHTML = 'El e-mail ingresado no es valido';
            
            }
            
        }
        }
        
    })

</script> 


        {{-- Validacion Login --}}

<script>

window.addEventListener('load', function (){ 

    var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    var loginForm = document.querySelector('#login-form');
    var emailFieldLogin = document.querySelector('#email-login');
    var passwordFieldLogin = document.querySelector('#password-login');

        function nuevoSpan(parentNode, campo, mensajeSpan){
            var parent = document.querySelector(parentNode)
            var span = document.createElement('span');
            span.className = campo + " d-none";
            var mensaje =  document.createTextNode(mensajeSpan);
            span.append(mensaje);
            parent.appendChild(span);
        }
    
    nuevoSpan('.parent-input-email', 'errorEmail' , 'Debe ingresar su e-mail');

        emailFieldLogin.addEventListener('blur', function (){
            var spanEmail = document.querySelector('.errorEmail');
            if (emailFieldLogin.value.trim() === '' ) {
                emailFieldLogin.className = 'form-control invalid';
                spanEmail.className = 'errorEmail d-block';
                spanEmail.classList.add('invalid-field');
                spanEmail.innerHTML = 'Debe ingresar su e-mail';
            } else {
                    emailFieldLogin.className = "form-control valid";
                    spanEmail.className = "errorEmail d-none";
                }  
        })

        emailFieldLogin.addEventListener('input', function (){
            var spanEmail = document.querySelector('.errorEmail');
            if (emailFieldLogin.value.trim() === '' ) {
                emailFieldLogin.className = 'form-control invalid';
                spanEmail.className = 'errorEmail d-block';
                spanEmail.classList.add('invalid-field');
                spanEmail.innerHTML = 'Debe ingresar su e-mail';
            } else {
                    emailFieldLogin.className = "form-control valid";
                    spanEmail.className = "errorEmail d-none";
                }  
        })

        emailFieldLogin.addEventListener('blur', function () {
            var spanEmail = document.querySelector('.errorEmail');
            if(emailFieldLogin.value.trim().length != 0 && !regexEmail.test(emailFieldLogin.value)){
                    emailFieldLogin.className = 'form-control invalid';
                    spanEmail.className = 'errorEmail d-block';
                    spanEmail.classList.add('invalid-field');
                    spanEmail.innerHTML = 'El email ingresado es invalido';
                } 
            
        })
        nuevoSpan('.parent-input-password', 'errorPassword' , 'Debe ingresar su contraseña');

        passwordFieldLogin.addEventListener('input', function (){ 
            var spanPassword = document.querySelector('.errorPassword');
                if (passwordFieldLogin.value.trim() === '' ) {
                    passwordFieldLogin.className = 'form-control invalid';
                    spanPassword.className = 'errorPassword d-block mb-2';
                    spanPassword.classList.add('invalid-field');
                    spanPassword.innerHTML = 'Debe ingresar su contraseña';
                } else {
                    passwordFieldLogin.className = "form-control valid"
                    spanPassword.className = "errorPassword d-none";
                    }  
        })
            
        passwordFieldLogin.addEventListener('blur', function (){ 
            var spanPassword = document.querySelector('.errorPassword');
                if (passwordFieldLogin.value.trim() === '' ) {
                passwordFieldLogin.className = 'form-control invalid';
                spanPassword.className = 'errorPassword d-block mb-2';
                spanPassword.classList.add('invalid-field');
                spanPassword.innerHTML = 'Debe ingresar su contraseña';
            } else {
                    passwordFieldLogin.className = "form-control valid";
                    spanPassword.className = "errorPassword d-none";
                }  
            
        })
        
        loginForm.onsubmit = function (event){
           
           if(emailFieldLogin.value.trim() === '' || passwordFieldLogin.value.trim() === ''){
            
            event.preventDefault();
                if(emailFieldLogin.value.trim() === '') {
                    var spanEmail = document.querySelector('.errorEmail');
                        emailFieldLogin.className = 'form-control invalid';
                        spanEmail.className = 'errorEmail d-block';
                        spanEmail.classList.add('invalid-field');
                } else if(passwordFieldLogin.value.trim() === ''){
                    var spanPassword = document.querySelector('.errorPassword');
                        passwordFieldLogin.className = 'form-control invalid';
                        spanPassword.className = 'errorPassword d-block mb-2';
                        spanPassword.classList.add('invalid-field');
                }
           }
    
       }
       

})

</script>


<script>
    // asignacion de la informacion para editar comentarios en el pop-up
    
    $('#editCommentsModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id_comment_to_edit = button.data('myid') 
        var body_comment_to_edit = button.data('mybody') 
  
        var modal = $(this)
        
        modal.find('.modal-body #id_comment').val(id_comment_to_edit)
        modal.find('.modal-body #body').val(body_comment_to_edit)
    })
 
</script>

<script>
    // extensión del titulo en el slider de productos recomendados
    $(function(){
        $(".text-title-slider").each(function(i){
            len=$(this).text().length;
            if(len>1)
            {
            $(this).text($(this).text().substr(0,25)+'...');
            }
        });
    });
</script>

<script>
    // extensión del texto en el slider de productos recomendados
    $(function(){
        $(".text-slider").each(function(i){
            len=$(this).text().length;
            if(len>20)
            {
            $(this).text($(this).text().substr(0,80)+'...');
            }
        });
    });
</script>
    
</body>

</html>
