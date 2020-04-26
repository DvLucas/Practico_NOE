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

                @if (isset($products))

                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Descripcion</th>
                                <th scope="col" class="text-center">Color</th>
                                <th scope="col" class="text-center">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)

                            <tr class="item-{{$item->id_product}}">
                                <th scope="row">
                                    @foreach ($item->gallery as $image )
                                    @if($image['store'] == 1)
                                    <img src="{{asset($image['url'])}}" style="width:100px"
                                        class="m-2 producto-img img-thumbnail" alt="...">
                                    @endif
                                    @endforeach
                                </th>

                                <th class="align-middle">
                                    {{$item->name}}
                                </th>

                                <th class="justify-content-center align-items-center text-center align-middle">
                                    @foreach ($item->color_product as $colorP)
                                    @foreach ($colors as $color)
                                    @if ($colorP->id_color == $color->id_color)

                                    <span id="check-{{$colorP->id_color_product}}" class="iconCheck span-color mx-1"
                                        style="background:{{$color->image}};position:relative"
                                        data-product=" {{$item->id_product}} ">
                                        <span id="{{$colorP->id_color_product}}" class="check text-success"
                                            style="display: none">
                                            <i class="fas fa-check-square"></i>
                                        </span>
                                    </span>

                                    @endif
                                    @endforeach
                                    @endforeach
                                </th>

                                <th class="align-middle">
                                    <div class="row d-flex justify-content-center align-items-center  px-3">
                                        <p class="mb-0 col-3 cantItem" id="cant-{{$item->id_product}}">1</p>
                                        <div class="col-3 d-flex flex-column">
                                            <button class="btn btn-success btn-sumar p-0 mb-1 align-items-center"
                                                id="{{$item->id_product}}" style="height:25px;width:25px">+</button>
                                            <button class="btn btn-danger btn-restar p-0 align-items-center"
                                                id="{{$item->id_product}}" style="height:25px;width:25px">-</button>
                                        </div>
                                    </div>
                                </th>

                                <th class="align-middle">
                                    <h6 class="mob-text price" id="price-{{$item->id_product}}"> ${{$item->price}}
                                    </h6>
                                </th>

                                <th class="align-middle">
                                    <a class="btn btn-danger mt-2 delete-cart" href="#" id="{{$item->id_product}}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </th>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row ">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row d-flex justify-content-end">
                                <div class="col-lg-4 mt-2 ">
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
                                    <button class="btn-block btn-yellow">
                                        <span>
                                            <span id="checkout">Comprar</span>
                                            <span id="check-amt">
                                                <!-- Calculado por js -->
                                            </span>
                                        </span>
                                    </button>
                                    <button class="btn-block btn-yellow">
                                        <span>
                                            <a href="{{ route('shop') }}">Seguir comprando</a>
                                        </span>
                                    </button>
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
