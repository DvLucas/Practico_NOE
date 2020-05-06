@extends('layouts.master')

@section('title')
Carrito de compras
@endsection

@section('content')

<div class="container my-2 p-2">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-carrito-tab" data-toggle="tab" href="#nav-carrito" role="tab"
                aria-controls="nav-carrito" aria-selected="true">Carrito</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-carrito" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container px-3 py-2 mx-auto cart-items">

                @if (isset($productColors))
                <div class="row">
                    <div class="col-12 text-center my-3 p-1">
                        @if (!auth()->user())
                            <h3>Logeate o registrate para poder continuar con la compra</h3>
                        @endif
                    </div>
                    <div class="col-12 col-lg-8">
                        <table class="">
                            <thead>
                                <tr>
                                    {{-- <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col" ></th>
                                    <th scope="col" ></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productColors as $key)
                                @foreach ($key->color_product as $item)
                                <tr class="item-{{$item->id_product}} row align-items-center border my-2 bg-white shadow">

                                    <th class="col-6 col-md-3">
                                        @foreach ($item->gallery as $image )
                                        @if($image['store'] == 1)
                                        <img src="{{asset($image['url'])}}" style="width:100px"
                                            class="m-2 producto-img img-thumbnail" alt="...">
                                        @endif
                                        @endforeach
                                    </th>

                                    <th class="col-6 col-md-2 order-md-last text-right">
                                        <a class="btn btn-danger mt-2 delete-cart" href="#" id="{{$item->id_product}}"
                                            data-color="{{$key->id_color_product}}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </th>
                                    <style>
                                        @media (max-width: 600px) {
                                            .card-cant ,.card-price{
                                                -webkit-box-shadow: -1px -18px 22px -2px rgba(0,0,0,0.1);
-moz-box-shadow: -1px -18px 22px -2px rgba(0,0,0,0.1);
box-shadow: -1px -18px 22px -2px rgba(0,0,0,0.1);
                                            }
                                        } 
                                    </style>
                                    <th class="col-12 col-md-3 description">
                                        Descripcion : <a href="{{route('item',$item)}}">{{$item->name}}</a><br>
                                        Color: {{$key->color->name}}
                                    </th>

                                    <th class="col-6 col-md-2 d-flex pt-2 justify-content-center card-cant">
                                        <button class="btn btn-dark btn-sumar p-0 mb-1 align-items-center"
                                            id="{{$item->id_product}}" style="height:25px;width:25px">+</button>
                                        <p class="mb-0 col-3 cantItem" id="cant-{{$item->id_product}}">1</p>
                                        <button class="btn btn-dark btn-restar p-0 align-items-center"
                                            id="{{$item->id_product}}" style="height:25px;width:25px">-</button>
                                    </th>

                                    <th class="col-6 col-md-2 pt-2 m-0 text-center card-price align-self-stretch ">
                                        <h6 class="mob-text price " id="price-{{$item->id_product}}"> ${{$item->price}}
                                        </h6>
                                    </th>

                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 col-lg-4 align-items-end">
                        <div class="card">
                            <div class="row d-flex justify-content-center">
                                <div class="col mt-2 ">
                                    <div class="row d-flex justify-content-between px-4">
                                        <p class="mb-1 text-left">Subtotal</p>
                                        <h6 class="mb-1 text-right subtotal">
                                            <!-- Calculado por js -->
                                        </h6>
                                    </div>
                                    <div class="row d-flex justify-content-between px-4">
                                        <p class="mb-1 text-left">Envío</p>
                                        <h6 class="mb-1 text-right">$500,00</h6>
                                    </div>
                                    <div class="row d-flex justify-content-between px-4" id="tax">
                                        <p class="mb-1 text-left">Total (tax included)</p>
                                        <h6 class="mb-1 text-right total">
                                            <!-- Calculado por js -->
                                        </h6>
                                    </div>
                                    <button class="btn-block btn-yellow" @if (!auth()->user())
                                        disabled
                                    @endif >
                                        <span>
                                            <span id="checkout">Comprar</span>
                                            <span id="check-amt">
                                                <!-- Calculado por js -->
                                            </span>
                                        </span>
                                    </button>

                                    <a href="{{ route('shop') }}">
                                        <button class="btn-block btn-yellow">
                                            <span>
                                                Seguir comprando
                                            </span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @else
                <div class="row justify-content-center">
                    <div class="col-12"><br><br><br><br></div>
                    <div class="col-5">
                        <h3>Sin productos seleccionados </h3>
                    </div>
                    <div class="col-12"><br><br><br><br></div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>

@endsection
