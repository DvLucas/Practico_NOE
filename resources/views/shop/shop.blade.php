@extends('layouts.master')

@section('title')
Tienda
@endsection


@section('content')

<main class="container-fluid my-3 main-tienda">

    <div class="row justify-content-center">

        @include('shop.includes.header_shop')

        @include('shop.includes.nav_shop')

        @include('shop.includes.products_shop')

        <div class="col-12 border-top pt-2">
            <div class="row justify-content-around align-items-center">
                <div class="col-2">
                    <p class="m-0">Articulos 1-12 de 30</p>
                </div> <!-- Cantidad de Articulos -->
                <div class="col-2">
                    <div class="">
                        {{$products->links()}}
                    </div>
                </div> <!-- Navegacion entre paginas -->
            </div>

        </div> <!-- Navegacion -->

    </div>


</main>

@endsection
