<div class="col-12 col-lg-2  m-2 text-left pl-0">

    <h3 class="mt-2 titulos-medio d-none d-lg-block">Categorias</h3>

    <div id="acordion" role="tablist" aria-multiselectable="true">
        <div class="navbar navbar-expand-lg">
            <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#fm-menu"
                aria-controls="fm-menu" aria-expanded="false" aria-label="Menu">
                <span class="titulos-medio">Categorias ▼</span>
            </button>
            <div class="collapse navbar-collapse" id="fm-menu">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <div class="card p-0">
                            <div class="card-header px-0" role="tab" id="heading1">
                                <h5 class="mb-0 titulos-categorias-tienda">
                                    <a href="#collapse1" data-toggle="collapse" data-parent="#acordion"
                                        aria-expanded="true" aria-controls="collapse1">
                                        Bicicletas
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header px-0 -->

                            <div id="collapse1" class="collapse show" role="tabpanel"
                                aria-labelledby="heading1">
                                <div class="card-block">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active hov-bici categorias-tienda" href="{{ route('findShop',5) }}">
                                                Adventure
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-bici categorias-tienda" href="{{ route('findShop',6) }}">Road</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-bici categorias-tienda" href="{{ route('findShop',7) }}">City</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-bici categorias-tienda" href="{{ route('findShop',8) }}">Cruisers</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div><!-- Bicicletas -->
                    </li>
                    <li class="nav-item">
                        <div class="card">
                            <div class="card-header px-0" role="tab" id="heading2">
                                <h5 class="mb-0 titulos-categorias-tienda">
                                    <a href="#collapse2" data-toggle="collapse" data-parent="#acordion"
                                        aria-expanded="true" aria-controls="collapse2">
                                        Accesorios
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header px-0 -->

                            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                                <div class="card-block">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active hov-acce categorias-tienda" href="{{ route('findShop',9) }}">
                                                Protector Bicicletas
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-acce categorias-tienda" href="{{ route('findShop',10) }}">
                                                Guardabarros
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-acce categorias-tienda" href="{{ route('findShop',11) }}">
                                                Botellas
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-acce categorias-tienda" href="{{ route('findShop',12) }}">
                                                Luces
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div><!-- Accesorios -->
                    </li>
                    <li class="nav-item">
                        <div class="card">
                            <div class="card-header px-0" role="tab" id="heading3">
                                <h5 class="mb-0 titulos-categorias-tienda">
                                    <a href="#collapse3" data-toggle="collapse" data-parent="#acordion"
                                        aria-expanded="true" aria-controls="collapse3">
                                        Partes
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header px-0 -->

                            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="card-block">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active hov-part categorias-tienda" href="{{ route('findShop',13) }}">
                                                Pedales
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-part categorias-tienda" href="{{ route('findShop',14) }}">
                                                Asientos
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-part categorias-tienda" href="{{ route('findShop',15) }}">
                                                Cuadro
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-part categorias-tienda" href="{{ route('findShop',16) }}">
                                                Frenos
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div><!-- Partes -->
                    </li>
                    <li class="nav-item">
                        <div class="card">
                            <div class="card-header px-0" role="tab" id="heading4">
                                <h5 class="mb-0 titulos-categorias-tienda">
                                    <a href="#collapse4" data-toggle="collapse" data-parent="#acordion"
                                        aria-expanded="true" aria-controls="collapse4">
                                        Cubiertas
                                    </a>
                                </h5>
                            </div>
                            <!--fin div card-header -->

                            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="card-block">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active hov-cubrt categorias-tienda" href="{{ route('findShop',17) }}">
                                                Ruta
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-cubrt categorias-tienda" href="{{ route('findShop',18) }}">
                                                Playeras
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-cubrt categorias-tienda" href="{{ route('findShop',19) }}">
                                                Paseo
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link hov-cubrt categorias-tienda" href="{{ route('findShop',20) }}">
                                                Mountain Bike
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div><!-- Cubierta -->
                </ul>

            </div>
        </div><!-- navbar -->
    </div>
</div> <!-- Filtros -->