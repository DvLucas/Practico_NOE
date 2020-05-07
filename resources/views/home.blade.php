@extends('layouts.master')

@section('content')


<main>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/imagenes/INDEX/carousel/PROMO 1-100.jpg" class="d-block w-100 col-12" alt="imagen-repuestosS">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="carousel-item">
            <img src="img/imagenes/INDEX/carousel/PROMO 2-100.jpg" class="d-block w-100 col-12" alt="imagen-accesorios" >
            <div class="carousel-caption">

            </div>
          </div>
          <div class="carousel-item">
            <img src="img/imagenes/INDEX/carousel/PROMO 3-100.jpg" class="d-block w-100 col-12" alt="bicicletas" >
            <div class="carousel-caption">

            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Slider -->

      <section class="section-productos container-fluid d-flex">
        <div class="productos d-flex justify-content-center col-12">
          <div class="col-10 row">
            <div class="col-6 col-md-3 text-center" id="bicicletas">
            <a href="{{route('search',['tipo'=>'category','id'=> 1 ])}}"><img src="img/imagenes/ICONOS/SVG/SVG/Recurso 5.svg" alt="Bicicletas" width="30%" height="50">
              <h3>BICICLETAS</h3>
            </a>
            </div>

            <div class="col-6 col-md-3 text-center" id="accesorios">
              <a href="{{route('search',['tipo'=>'category','id'=> 2 ])}}"><img src="img/imagenes/ICONOS/SVG/SVG/Recurso 6.svg" alt="Accesorios" width="30%" height="50">
              <h3>ACCESORIOS</h3>
              </a>
            </div>

            <div class="col-6 col-md-3 text-center" id="cubiertas">
              <a href="{{route('search',['tipo'=>'category','id'=> 3 ])}}"><img src="img/imagenes/ICONOS/SVG/SVG/Recurso 9.svg" alt="Cubiertas" width="30%" height="50">
              <h3>CUBIERTAS</h3>
              </a>
            </div>

            <div class="col-6 col-md-3 text-center" id="repuestos">
              <a href="{{route('search',['tipo'=>'category','id'=> 4 ])}}"><img src="img/imagenes/ICONOS/SVG/SVG/Recurso 10.svg" alt="Repuestos" width="30%" height="50">
              <h3>REPUESTOS</h3>
              </a>
            </div>

          </div>
        </div>
      </section> <!-- Acceso a la tienda -->

      <!--- productos seleccionados-->

      <div class="container my-4">
        <div class="card-header bg-black text-light titulos-header">
          PRODUCTOS DESTACADOS
        </div>

      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">


        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
          <li data-target="#multi-item-example" data-slide-to="1"></li>
          <li data-target="#multi-item-example" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--First slide-->
          <div class="carousel-item active">
          <div class="row">
              @for ($i = 0; $i < 3; $i++)
                @if($i == 0)
                  <div class="col-md-4">
                    <div class="card mb-2">
                      @foreach($some_products[$i]->gallery as $image)
                        @if($image['store'] == 1)
                          <img src="{{asset($image['url'])}}" class="card-img-top" alt="Card image cap">
                        @endif
                      @endforeach
                      <div class="card-body">
                        <h4 class="card-title text-title-slider">{{$some_products[$i]->name}}</h4>
                        <h4 class="card-title">${{$some_products[$i]->price}}</h4>
                        <p class="card-text text-slider">{{$some_products[$i]->description}}</p>
                        <a href="tienda/item/{{$some_products[$i]->id_product}}" class="btn btn-dark">Mirar</a>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      @foreach($some_products[$i]->gallery as $image)
                        @if($image['store'] == 1)
                          <img src="{{asset($image['url'])}}" class="card-img-top" alt="Card image cap">
                        @endif
                      @endforeach
                      <div class="card-body">
                        <h4 class="card-title text-title-slider">{{$some_products[$i]->name}}</h4>
                        <h4 class="card-title">${{$some_products[$i]->price}}</h4>
                        <p class="card-text text-slider">{{$some_products[$i]->description}}</p>
                        <a href="tienda/item/{{$some_products[$i]->id_product}}" class="btn btn-dark">Mirar</a>
                      </div>
                    </div>
                  </div>
                @endif
              @endfor     
            </div>
          </div>

          <!--Second slide-->
          <div class="carousel-item">
            <div class="row">
              @for ($i = 3; $i < 6; $i++)
                @if($i == 3)
                  <div class="col-md-4">
                    <div class="card mb-2">
                      @foreach($some_products[$i]->gallery as $image)
                        @if($image['store'] == 1)
                          <img src="{{asset($image['url'])}}" class="card-img-top" alt="Card image cap">
                        @endif
                      @endforeach
                      <div class="card-body">
                        <h4 class="card-title text-title-slider">{{$some_products[$i]->name}}</h4>
                        <h4 class="card-title">${{$some_products[$i]->price}}</h4>
                        <p class="card-text text-slider">{{$some_products[$i]->description}}</p>
                        <a href="tienda/item/{{$some_products[$i]->id_product}}" class="btn btn-dark">Mirar</a>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      @foreach($some_products[$i]->gallery as $image)
                        @if($image['store'] == 1)
                          <img src="{{asset($image['url'])}}" class="card-img-top" alt="Card image cap">
                        @endif
                      @endforeach
                      <div class="card-body">
                        <h4 class="card-title text-title-slider">{{$some_products[$i]->name}}</h4>
                        <h4 class="card-title">${{$some_products[$i]->price}}</h4>
                        <p class="card-text text-slider">{{$some_products[$i]->description}}</p>
                        <a href="tienda/item/{{$some_products[$i]->id_product}}" class="btn btn-dark">Mirar</a>
                      </div>
                    </div>
                  </div>
                @endif
              @endfor     
            </div>
          </div>

          <!--Third slide-->
          <div class="carousel-item">
            <div class="row">
              @for ($i = 6; $i < 9; $i++)
                @if($i == 6)
                  <div class="col-md-4">
                    <div class="card mb-2">
                      @foreach($some_products[$i]->gallery as $image)
                        @if($image['store'] == 1)
                          <img src="{{asset($image['url'])}}" class="card-img-top" alt="Card image cap">
                        @endif
                      @endforeach
                      <div class="card-body">
                        <h4 class="card-title text-title-slider">{{$some_products[$i]->name}}</h4>
                        <h4 class="card-title">${{$some_products[$i]->price}}</h4>
                        <p class="card-text text-slider">{{$some_products[$i]->description}}</p>
                        <a href="tienda/item/{{$some_products[$i]->id_product}}" class="btn btn-dark">Mirar</a>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      @foreach($some_products[$i]->gallery as $image)
                        @if($image['store'] == 1)
                          <img src="{{asset($image['url'])}}" class="card-img-top" alt="Card image cap">
                        @endif
                      @endforeach
                      <div class="card-body">
                        <h4 class="card-title text-title-slider">{{$some_products[$i]->name}}</h4>
                        <h4 class="card-title">${{$some_products[$i]->price}}</h4>
                        <p class="card-text text-slider">{{$some_products[$i]->description}}</p>
                        <a href="tienda/item/{{$some_products[$i]->id_product}}" class="btn btn-dark">Mirar</a>
                      </div>
                    </div>
                  </div>
                @endif
              @endfor     
            </div>
          </div>

        </div>
        <!--/.Slides-->

        <!--Controls-->

        <div class="controls-top d-flex justify-content-center mt-1 mb-1">
          <a class="left fa fa-chevron-left btn bg-yellow " href="#multi-item-example" data-slide="prev">
          </a><a class="ml-1 right fa fa-chevron-right btn bg-yellow" href="#multi-item-example" data-slide="next"></a>
        </div>

        <!--/.Controls-->
        </div>
      </div>
      <!--/.Carousel Wrapper-->

      <!---productos seleccionados end-->

      <section class="d-flex justify-content-center col-12 mb-3">
        
          <div class="row col-lg-12">
            <div class="col-md-3 mb-1">
              <a href="{{route('search',['tipo'=>'category','id'=> 7])}}"><img src="img/imagenes/index/CIUDAD-100.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-md-3 mb-1">
              <a href="{{route('search',['tipo'=>'category','id'=> 6])}}"><img src="img/imagenes/index/RUTA-100.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-md-3 mb-1">
              <a href="{{route('search',['tipo'=>'category','id'=> 5])}}"><img src="img/imagenes/index/MONTAÑA-100.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-md-3 mb-1">
              <a href="{{route('search',['tipo'=>'category','id'=> 8])}}"><img src="img/imagenes/index/FIXED-100.jpg" alt="" width="100%"></a>
            </div>
          </div>
        
      </section> <!-- Seccion de Categorias -->

      <span class="border-top"></span>

    </main>
@endsection
