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
        <div class="productos d-flex justify-content-center align-items-end w-100">
          <div class="row">
            <div class="col-6 col-md-3 text-center" id="bicicletas">
            <a href="tienda"><img src="img/imagenes/ICONOS/SVG/SVG/Recurso 5.svg" alt="Bicicletas" width="30%" height="50">
              <h3>BICICLETAS</h3>
            </a>
            </div>

            <div class="col-6 col-md-3 text-center" id="accesorios">
              <a href="tienda"><img src="img/imagenes/ICONOS/SVG/SVG/Recurso 6.svg" alt="Accesorios" width="30%" height="50">
              <h3>ACCESORIOS</h3>
              </a>
            </div>

            <div class="col-6 col-md-3 text-center" id="cubiertas">
              <a href="tienda"><img src="img/imagenes/ICONOS/SVG/SVG/Recurso 9.svg" alt="Cubiertas" width="30%" height="50">
              <h3>CUBIERTAS</h3>
              </a>
            </div>

            <div class="col-6 col-md-3 text-center" id="repuestos">
              <a href="tienda"><img src="img/imagenes/ICONOS/SVG/SVG/Recurso 10.svg" alt="Repuestos" width="30%" height="50">
              <h3>REPUESTOS</h3>
              </a>
            </div>

          </div>
        </div>
      </section> <!-- Acceso a la tienda -->

      <section class="nuestras-bicis container-fluid d-flex">
        <div class="productos d-flex justify-content-center align-items-end w-100">
          <div class="row col-lg-10">
            <div class="col-md-6 p-2">
              <a href="tienda"><img src="img/imagenes/index/CIUDAD-100.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-md-6 p-2">
              <a href="tienda"><img src="img/imagenes/index/RUTA-100.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-md-6 p-2">
              <a href="tienda"><img src="img/imagenes/index/MONTAÑA-100.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-md-6 p-2">
              <a href="tienda"><img src="img/imagenes/index/FIXED-100.jpg" alt="" width="100%"></a>
            </div>
          </div>
        </div>
      </section> <!-- Seccion de Categorias -->

      <span class="border-top"></span>

    </main>
@endsection
