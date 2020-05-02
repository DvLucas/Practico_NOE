
<footer class="container-fluid pt-4" style="background-color: rgb(30, 30, 30)">
    <div class="row justify-content-around align-items-start">
        <div class="col-7 col-lg-3 order-last order-lg-first">
            <div class="row justify-content-center mt-2 mt-md-0 p-2 text-center">
                <div class="col-8">
                    <a href="{{ url('home') }}">
                        <img src="{{asset('img/icons/icon_footer.svg')}}" alt="Logo">
                    </a>
                </div>
                <div class="col-12">
                    <p class="text-white subtitulos">Todo lo que necesitas para tu bicicleta</p>
                    <p class="text-muted subtitulos">Noe Bicicletas S.R.L</p>
                </div>
            </div>
        </div> <!-- Logo -->
        <div class="col-5 col-md-3 col-lg-2 text-left">
            <h5 class="text-white mb-3 titulos-categorias-tienda">Productos</h5>
            <ul class="p-0 subtitulos">
                <li>
                    <a href="{{route('search',['tipo'=>'category','id'=> 1])}}">Bicicletas</a>
                </li>
                <li>
                    <a href="{{route('search',['tipo'=>'category','id'=> 2])}}">Accesorios</a>
                </li>
                <li>
                    <a href="{{route('search',['tipo'=>'category','id'=> 3])}}">Cubiertas</a>
                </li>
                <li>
                    <a href="{{route('search',['tipo'=>'category','id'=> 4])}}">Repuestos</a>
                </li>
            </ul>
        </div> <!-- Productos -->
        <div class="col-5 col-md-3 col-lg-2 text-left">
            <h5 class="text-white mb-3 titulos-categorias-tienda">Atencion al Cliente</h5>
            <ul class="p-0 subtitulos">
                <li>
                    <a href="{{route('faq')}}">Faq</a>
                </li>
                <li>
                    <a href="{{route('contacto')}}">Contacto</a>
                </li>
                <li>
                    <a href="{{route('register')}}">Registrate</a>
                </li>
            </ul>
        </div> <!-- Atencion Al Cliente -->
        <div class="col-5 col-md-3 col-lg-2 text-left">
            <h5 class="text-white mb-3 titulos-categorias-tienda">Seguinos</h5>
            <ul class="ul-redes p-0">
                <li>
                    <a href="https://www.facebook.com">
                        <img src="{{asset('img\icons\facebook.svg')}}" width="30" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com">
                        <img src="{{asset('img\icons\twitter.svg')}}" width="30" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com">
                        <img src="{{asset('img\icons\youtube.svg')}}" width="30" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com">
                        <img src="{{asset('img\icons\instagram.svg')}}" width="30" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('img/icons/ubicacion.svg')}}" width="30" alt="">
                    </a>
                </li>
            </ul>
        </div> <!-- redes -->
        <div class="col-5 col-md-3 col-lg-2 text-white">
            <div class="row justify-content-center text-left text-md-center">
                <div class="col-12 categorias-tienda">
                    <h5>Newsletter</h5>
                    <p>Enterate antes que nadie de las últimas novedades y promociones.</p>
                </div>
                <form class="col-12 d-flex" action="">
                    <input type="email" class="form-control form-control-sm" placeholder="Email">
                    <button class="btn btn-warning btn-sm m-0">></button>
                </form>
            </div>
        </div> <!-- Newsletter -->
    </div>
</footer>