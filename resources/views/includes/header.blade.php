<header>

    <div class="header-nav-top">
        <div class="nav-contacto float-left">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="tel:543516999999" target="_blank"> <img
                            src="{{asset('img/icons/telefono.svg')}}" alt="" height="16"> +54 3516 999 999</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mailto:info@bicisnoe.com.ar" target="_blank"> <img
                            src="{{asset('img/icons/mail.svg')}}" alt="" height="16"> info@bicisnoe.com.ar</a>
                </li>
            </ul>
        </div>
        <div class="nav-nosotros float-right d-none d-md-block">
            <!--oculto en mobile-->
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="contacto">sobre nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq">preguntas frecuentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">contactanos</a>
                </li>
                <li class="nav-item">
                    @if (auth()->user() !=null)


                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        role="buttom" aria-expanded="false">{{ auth()->user()->name }}
                        <span class="glyphicon glyphicon-dashboard " aria-hidden="true"> </span> <span
                            class="caret"></span>
                    </a>
                    <ul class="dropdown-menu header-nav-top text-center text-uppercase font-weight-bold">
                        <li>
                            <a href="usuario.php">Perfil</a>
                        </li>
                        <li>
                            <a href="tienda.php">Compras</a>
                        </li>
                        <li>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                    @else

                    <a class="nav-link" href="login">Ingresar a mi cuenta</a>

                    @endif

                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark col-12" style="background-color:rgb(30,30,30)">
        <div class="row mx-0 w-100 justify-content-around">

<<<<<<< HEAD
            <a class="col navbar-brand text-center" href="home"><img src="img/icons/logo_blanco.svg" alt="logo"
                    height="35"></a> <!-- Logo -->
=======
            <a class="col navbar-brand text-center" href="home"><img src="{{asset('img/icons/logo_blanco.svg')}}"
                    alt="logo" height="35"></a> <!-- Logo -->
>>>>>>> 5a5cfc57f7fd260215c98f633abbffd78a2d45a0

            <button class="col-2 ml-1 order-first d-md-none navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                style="text-align:center;">
                <span class="navbar-toggler-icon"></span>
            </button> <!-- Boton Desplegable -->

            <div class="col-2 col-md-auto order-md-last navbar justify-content-end"
                style="background-color:rgb(30,30,30)">
                <form class="form-inline d-none d-md-block" method="GET" action="tienda.php">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search"
                        name="buscar">
<<<<<<< HEAD
                    <button class="btn my-2 my-sm-0" type="submit"><img src="img/icons/busqueda_amarillo.svg" alt=""
                            height="18"></button>
=======
                    <button class="btn my-2 my-sm-0" type="submit"><img
                            src="{{asset('img/icons/busqueda_amarillo.svg')}}" alt="" height="18"></button>
>>>>>>> 5a5cfc57f7fd260215c98f633abbffd78a2d45a0
                </form>

                @if (auth()->user() !=null)

                <div class="btn-group dropleft d-md-none">
                    <a href="#" role="button" class="nav-link p-0" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="{{asset('img/icons/busqueda_amarillo.svg')}}" alt="" height="18"></a>
                    <div class="dropdown-menu header-nav-top text-center text-uppercase font-weight-bold">
                        <ul class="nav flex-column p-1">
                            <li class="nav-item text-muted">
                                {{ auth()->user()->name }}
                            </li>
                            <li class="nav-item">
                                <a href="usuario.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a href="shop">Compras</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>
                </div>

                @else

<<<<<<< HEAD
                <a class="d-md-none" href="login"><img src="img/icons/busqueda_amarillo.svg" alt="" height="18"></a>

                @endif

                <a class="bag" href="cart"><img src="img/icons/bolsa_amarillo.svg" alt="" height="20"></a>
=======
                <a class="d-md-none" href="login"><img src="{{asset('img/icons/busqueda_amarillo.svg')}}" alt=""
                        height="18"></a>

                @endif

                <a class="bag" href="cart"><img src="{{asset('img/icons/bolsa_amarillo.svg')}}" alt=""
                        height="20"></a>
>>>>>>> 5a5cfc57f7fd260215c98f633abbffd78a2d45a0
            </div> <!-- Iconos -->

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

                <form class="form d-flex my-2  d-md-none" action="tienda.php" method="GET">
                    <input class="form-control ml-2" type="search" placeholder="Search" aria-label="Search"
                        name="buscar">
                    <button class="btn" type="submit"><img src="{{asset('img/icons/busqueda_amarillo.svg')}}" alt=""
                            height="18"></button>
                </form> <!-- Busqueda en movil -->

                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link titulos-header text-light" href="shop">BICICLETAS <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titulos-header text-light" href="shop">EQUIPOS Y ACCESORIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titulos-header text-light" href="shop">REPUESTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titulos-header text-light" href="shop">CUBIERTAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titulos-header text-light" href="shop">SALE !</a>
                    </li>
                </ul>
            </div><!-- Menu colapsable -->


        </div> <!-- Row para ordenar columnas en movil -->
    </nav>

    <div class="nav-menu-nosostros d-block d-md-none">
        <!--visible en mobile-->
        <div class="row w-100" style="margin: 0%; padding: 0%;">
            <div class="nav-menu col-5">
                <a class="nav-link" href="faq">preguntas frecuentes</a>
            </div>
            <div class="nav-menu col-2">
                <a class="nav-link" href="contacto">contactanos</a>
            </div>
            <div class="nav-menu col-5">

                @if (auth()->user() !=null)


                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="buttom"
                    aria-expanded="false">{{ auth()->user()->name }}

                    <span class="glyphicon glyphicon-dashboard " aria-hidden="true"> </span> <span class="caret"></span>
                </a>

                <ul class="dropdown-menu nav-menu-nosostros text-center text-uppercase font-weight-bold">
                    <li><a href="usuario.php">Perfil</a></li>
                    <li> <a href="cart">Compras</a></li>

                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>


                </ul>


                @else

                <a class="nav-link" href="register">Registrate</a>

                @endif

            </div>
        </div>
    </div>

</header>
