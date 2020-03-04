@extends('layouts.master')

@section('title') 
    {{$product['name']}}
@endsection


@section('content')


<main class="my-5">
<div class="row justify-content-around overflow-hidden">
  <!-- PRODUCTO + COMENTARIOS -->
  <div class="col-10 col-lg-9">
    <div class="row">

      <!-- Card de producto -->
      <div class="card col-md-12 producto p-0">
        <div class="row no-gutters">
          <!-- Galeria -->
          <aside class="col-md-6">
            <div class="row">
                <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\aventura.jpg"></div>
                            <div class="tab-pane" id="pic-2"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item1.jpg"></div>
                            <div class="tab-pane" id="pic-3"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item2.jpg"></div>
                            <div class="tab-pane" id="pic-4"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item3.jpg"></div>
                  <div class="tab-pane" id="pic-5"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item4.jpg"></div>
                            </div>
                            <ul class="preview-thumbnail nav overflow-hidden mb-3 mt-2">
                              <li class="active flaot-left col-3"><a data-target="#pic-1" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\aventura.jpg"></a></li>
                              <li class="float-left col-3"><a data-target="#pic-2" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item1.jpg"></a></li>
                              <li class="float-left col-3"><a data-target="#pic-3" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item2.jpg"></a></li>
                  <li class="float-left col-3"><a data-target="#pic-4" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item3.jpg"></a></li>
                  <li class="float-left col-3"><a data-target="#pic-5" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item4.jpg"></a></li>
                            </ul>
            </div> <!-- FIN ROW -->
          </aside>

          <!-- Descripcion del producto -->
          <main class="col-md-6 border-left p-1">

            <article class="content-body">
              <!-- Titulo -->
              <h2 class="title titulos-medio mt-2">{{$product['name']}}</h2>
              <!-- estrellas y reviews del producto -->
              <div class="rating-wrap my-3 overflow-hidden">
                <div class="float-left ml-1">
                  <small class="tex-noe-black botones-texto">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
                <p class="text-muted float-left ml-1 texto-parrafo">132 reviews</p>
                <p class="text-success float-left ml-1 texto-parrafo"></i> 154 orders </p>
              </div>
              <!-- precio -->
              <div class="mb-3">
                <p class="price titulos-medio">${{$product['price']}}</p>
              </div>
              <!-- descripcion del producto -->
              <p class="texto-parrafo">{{$product['description']}}</p>
              <!-- relativo al modelo color y desde donde proviene -->
              <dl class="row">
                <dt class="col-sm-3 botones-texto">Marca</dt>
                <dd class="col-sm-9 botones-texto">{{print_r($product['brand'])}}</dd>
                <dt class="col-sm-3 botones-texto">Color</dt>
                <dd class="col-sm-9 botones-texto">Noe Yellow</dd>
              </dl>
              <!-- linea separadora entre descripcion y detalles de compra -->
              <hr>

              <div class="form-row p-1">
                <!-- botones para elegir cantidad de productos -->
                <div class="botones-texto">
                  <label>Cantidad</label>
                  <div class="input-group mb-3 input-spinner">
                    <div class="input-group-prepend">
                      <button class="btn btn-dark" type="button" id="button-plus"> + </button>
                    </div>
                    <input type="text" class="form-control col-md-3" value="{{$product['stock']}}">
                    <div class="input-group-append">
                      <button class="btn btn-dark" type="button" id="button-minus"> − </button>
                    </div>
                  </div>
                  <!-- botones de compra y agregar al carrito -->
                  <a href="#" class="btn noe-yellow float-left botones-texto"> Comprar </a>
                  <a href="#" class="btn noe-yellow float-left ml-1 botones-texto"> <span class="text">Agregar al carrito</span> <i class="fas fa-shopping-cart"></i> </a>
                  <img src="img\ICONOS\UTILIDAD AMARILLOS\carrito.svg" width="40" alt="">
                </div>
              </div>
            </article>
          </main>

        </div>
      </div>

  <!-- COLUMNA DE PRODUCTOS RELACIONADOS -->
  <div class="col-12 col-lg-2">
    
    <div class="row justify-content-center">
    
      <div class="col-10 noe-black my-2">
        <p class="titulos-header text-light ">Productos Relacionados</p>
      </div> <!-- fin titulo -->
      
      <div class="col-12">
        
        <div class="row justify-content-around">
        @for($i=0; $i<=4; $i++)
          <div class="card producto mb-3 col-10 p-0">
            <a href="" class="text-center p-3">
              <img src="img\PRODUCTOS\CUBIERTAS\mavic-ksyrium-elite-wts-red-shimano.jpg" class="card-img-top img-fluid" alt="..." style="max-width: 13rem;">
            </a>
            <div class="card-body botones-texto my-0 py-0">
              <a href="#">
                <h6 class="mb-1">Cubiertas para ciudad</h6>
              </a>
              <p class="texto-parrafo mb-1">$1224.99</p>
              <div class="overflow-hidden">
                <!-- relativo a productos destacados -->
                <img src="img\ICONOS\UTILIDAD AMARILLOS\etiqueta.svg" width="20" alt="" class="float-left">
                <p class="float-left texto-parrafo text-noe-yellow mb-1">Producto destacado</p>
              </div>
            </div>
            <div class="card-footer">
              <small class="text-noe-black botones-texto">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        @endfor
      </div> <!-- fin columnas productos -->

    </div> <!-- fin row productos relacionados -->


</div> <!-- fin row -->

</main>
@endsection