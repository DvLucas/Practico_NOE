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
                  <div class="row d-flex justify-content-center titulos-items">
                      <div class="col-3">
                          <h5 class="heading mt-2">Producto</h5>
                      </div>
                      <div class="col-9">
                          <div class="row text-center">
                              <div class="col-6">
                                  <h6 class="mt-2">Descripcion</h6>
                              </div>
                              <div class="col-3">
                                  <h6 class="mt-2">Catidad</h6>
                              </div>
                              <div class="col-3">
                                  <h6 class="mt-2">Precio</h6>
                              </div>
                          </div>
                      </div>
                  </div>
                  @foreach ($products as $item)
                    <div class="row d-flex justify-content-center border-top">
                        <div class="col-3">
                            <div class="row d-flex">
                                <div class="producto">
                                    @foreach ($item->gallery as $image )
                                    @if($image['store'] == 1)
                                    <img src="{{asset($image['url'])}}" class="m-2 producto-img w-75 img-thumbnail"
                                        alt="...">
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <style>
                            .span-color{
                                border-radius: 50%;
                                display: inline-block;
                                border: 1px solid #000;
                                width: 17px;
                                height: 17px;
                                margin: auto 2.5px;
                            }
                        </style>
                        <div class="my-auto col-9">
                            <div class="row text-center">
                                <div class="col-6">
                                    <h6 class="mob-text"> {{$item->name}} </h6>
                                    <div class="justify-content-center align-items-center">
                                        <p class="mob-text mb-0">Color</p>
                                            @foreach ($item->color_product as $colorP)
                                                @foreach ($colors as $color)
                                                    @if ($colorP->id_color == $color->id_color)
                                                    <a href="">
                                                        <span class="span-color" style="background:{{$color->image}}"></span>
                                                    </a>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row d-flex justify-content-center align-items-center  px-3">
                                        <p class="mb-0 col-3 cantItem" id="cant-{{$item->id_product}}">1</p>
                                        <div class="col-3 d-flex flex-column">
                                            <button class="btn btn-success btn-sumar p-0 mb-1 align-items-center" id="{{$item->id_product}}" style="height:25px;width:25px">+</button>
                                            <button class="btn btn-danger btn-restar p-0 align-items-center" id="{{$item->id_product}}" style="height:25px;width:25px">-</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h6 class="mob-text price" id="price-{{$item->id_product}}"> ${{$item->price}} </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
                
                  <div class="row ">
                      <div class="col-lg-12">
                          <div class="card">
                              <div class="row d-flex justify-content-end">
                                  <div class="col-lg-4 mt-2 ">
                                      <div class="row d-flex justify-content-between px-4">
                                          <p class="mb-1 text-left">Subtotal</p>
                                          <h6 class="mb-1 text-right subtotal"><!-- Calculado por js --></h6>
                                      </div>
                                      <div class="row d-flex justify-content-between px-4">
                                          <p class="mb-1 text-left">Envío</p>
                                          <h6 class="mb-1 text-right">$500,00</h6>
                                      </div>
                                      <div class="row d-flex justify-content-between px-4" id="tax">
                                          <p class="mb-1 text-left">Total (tax included)</p>
                                          <h6 class="mb-1 text-right total"><!-- Calculado por js --></h6>
                                      </div>
                                      <button class="btn-block btn-yellow">
                                          <span>
                                              <span id="checkout">Checkout</span>
                                              <span id="check-amt"><!-- Calculado por js --></span>
                                          </span>
                                      </button>
                                      <button class="btn-block btn-yellow">
                                          <span>
                                              <a href="{{ url()->previous() }}">Seguir comprando</a>
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
