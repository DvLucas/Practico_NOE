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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


    <script>
        $('#deleteCateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id') 
            action = $('#formCatDelete').attr('data-action').slice(0,-1)
            action += id
            console.log(action)
    
           $('#formCatDelete').attr('action',action)
        })

        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id') 
            var state = button.data('state')
            action = $('#formDelete').attr('data-action').slice(0,-1)
            action += id
            console.log(action)
    
            $('#formDelete').attr('action',action)
    
            var modal = $(this)
            if(state==0){
                modal.find('.modal-title').text('Vas a dar alta al producto: ' + id)
            }else{
                modal.find('.modal-title').text('Vas a quitar el producto: ' + id)
            }
        })

        $('#checkCategoryFather').on('click', function(e){
            if (this.checked == true) {
                console.log($('#selectCategoryChild'));
                $('#selectCategoryChild').attr('disabled','disabled');
            } else {
                $('#selectCategoryChild').removeAttr('disabled');
            }

        })

        $('#a-icon-nav').on('click', function(e){
            $('#icon-nav').toggleClass('rotate');
        })
    </script> {{-- Este scrip te utiliza en la vista de listar productos panel --}}

<script>
    $('#imageModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id') 
        var name = button.data('name') 
        var state = button.data('state')
       /*  action = $('#formDelete').attr('data-action').slice(0,-1)
        action += id
        console.log(action) */

        $('#inputId').attr('value',id)
        $('#inputName').attr('value',name)

        var modal = $(this)
        /* if(state==0){
            modal.find('.modal-title').text('Vas a dar alta al producto: ' + id)
        }else{
            modal.find('.modal-title').text('Vas a quitar el producto: ' + id)
        } */
    })
</script> {{-- Este scrip se utiliza para las imagenes --}}

<script>
    // asignacion de la informacion para editar colores en el pop-up
    
    $('#editColorsModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id_color_to_edit = button.data('myid')
        var name_color_to_edit = button.data('myname') 
        var code_color_to_edit = button.data('mycode') 
  
        var modal = $(this)
        
        modal.find('.modal-body #id_color').val(id_color_to_edit)
        modal.find('.modal-body #name').val(name_color_to_edit)
        modal.find('.modal-body #image').val(code_color_to_edit)
    })
 
</script>

<script>
    // asignacion de la informacion para editar marcas en el pop-up
    
    $('#editBrandModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id_brand_to_edit = button.data('myid')
        var name_brand_to_edit = button.data('myname')  
  
        var modal = $(this)
        
        modal.find('.modal-body #id_brand').val(id_brand_to_edit)
        modal.find('.modal-body #description').val(name_brand_to_edit)
    })
 
</script>

    
</body>

</html>
