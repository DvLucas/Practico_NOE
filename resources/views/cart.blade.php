@extends('layouts.master')

@section('title') 
    Carrito de compras
@endsection

@section('content')

<div style="margin: 15px;">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-carrito-tab" data-toggle="tab" href="#nav-carrito" role="tab"
          aria-controls="nav-carrito" aria-selected="true">Carrito</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-carrito" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="container px-3 py-2 mx-auto">
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
        <div class="row d-flex justify-content-center border-top">
            <div class="col-3">
                <div class="row d-flex">
                    <div class="producto"> 
                      <img src="img/PRODUCTOS/BICICLETAS/carretera.jpg" class="producto-img w-100"> 
                    </div>
                </div>
            </div>
            <div class="my-auto col-9">
                <div class="row text-center">
                    <div class="col-6">
                        <h6 class="mob-text">Bici Noe</h6>
                        <p class="mob-text"> Color: Amarillo </p>
                    </div>
                    <div class="col-3">
                      <div class="row d-flex justify-content-center px-3">
                        <p class="mb-0" id="cnt2">1</p>
                        <div class="d-flex flex-column plus-minus"> 
                          <span class="vsm-text plus">+</span> 
                          <span class="vsm-text minus">-</span> 
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mob-text">$18.150,00</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center border-top">
            <div class="col-3">
                <div class="row d-flex">
                    <div class="producto"> 
                      <img src="img/PRODUCTOS/EQUIPO Y ACCESORIOS/casco2.jpg" class="producto-img w-100 card-img"> 
                    </div>
                </div>
            </div>
            <div class="my-auto col-9">
                <div class="row text-center">
                    <div class="col-6">
                      <h6 class="mob-text">Casco Noe</h6>
                      <p class="mob-text"> Color: Negro </p>
                    </div>
                    <div class="col-3">
                        <div class="row d-flex justify-content-center px-3">
                            <p class="mb-0" id="cnt2">1</p>
                            <div class="d-flex flex-column plus-minus"> 
                              <span class="vsm-text plus">+</span> 
                              <span class="vsm-text minus">-</span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mob-text">$3.500,00</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row d-flex justify-content-end">
                        <div class="col-lg-4 mt-2 ">
                            <div class="row d-flex justify-content-between px-4">
                                <p class="mb-1 text-left">Subtotal</p>
                                <h6 class="mb-1 text-right">$21.650,00</h6>
                            </div>
                            <div class="row d-flex justify-content-between px-4">
                                <p class="mb-1 text-left">Envío</p>
                                <h6 class="mb-1 text-right">$0,00</h6>
                            </div>
                            <div class="row d-flex justify-content-between px-4" id="tax">
                                <p class="mb-1 text-left">Total (tax included)</p>
                                <h6 class="mb-1 text-right">$21.650,00</h6>
                            </div> 
                            <button class="btn-block btn-yellow"> 
                              <span> 
                                <span id="checkout">Checkout</span> 
                                <span id="check-amt">$21.650,00</span> 
                              </span> 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    
@endsection