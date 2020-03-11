<div class="col-12 col-lg-2  m-2 text-left pl-0">

    <h3 class="mt-2 titulos-medio d-none d-lg-block">Categorias</h3>

    {{-- <div id="acordion" role="tablist" aria-multiselectable="true">
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
    </div> --}}

    <style>
        .filter-group {
            border-bottom: 1px solid #e4e4e4
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.37rem
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1)
        }

        .filter-group .card-header {
            border-bottom: 0
        }

        .icon-control {
            margin-top: 6px;
            float: right;
            font-size: 80%
        }

        .list-menu {
            list-style: none;
            margin: 0;
            padding-left: 0
        }

        .list-menu a {
            color: #343a40
        }

        a {
            text-decoration: none !important;
            background-color: transparent
        }

        .checkbox-btn {
            position: relative
        }

        .checkbox-btn input {
            position: absolute;
            z-index: -1;
            opacity: 0
        }

        .checkbox-btn input:checked~.btn {
            border-color: #3167eb;
            background-color: #3167eb;
            color: #fff
        }

        .btn-light {
            display: inline-block;
            font-weight: 600;
            color: #343a40;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #eee;
            border: 1px solid #eee;
            padding: 0.45rem 0.85rem;
            font-size: 10px;
            line-height: 1.5;
            border-radius: 0.37rem
        }

        .btn-light:hover {
            background-color: #fff;
            border-color: #989898
        }

        .btn-medium {
            font-size: 12px;
            padding: 10px 22px;
            display: inline-block;
            margin-right: 20px;
            letter-spacing: 2px;
            border: 1px solid #157af6;
            width: 100%
        }

        .highlight-button:hover {
            background-color: #157af6;
            border: 2px solid #157af6;
            color: #fff
        }

        .custom-control {
            position: relative;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem
        }
    </style>

    <div class="card">
        <article class="filter-group">
            <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1"
                    data-abc="true" aria-expanded="false" class="collapsed"> <i
                        class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">Categorias </h6>
                </a> </header>
            <div class="filter-content collapse" id="collapse_aside1" style="">
                <div class="card-body pt-0">
                    <ul class="list-menu">
                        <a href="{{route('shop')}}">
                            <p class="font-weight-bold">Todos</p>
                        </a>
                        @foreach ($categoriesFathers as $categoryF)
                            <a href="{{route('search',['tipo'=>'category','id'=> $categoryF->id_category])}}">
                                <h5 class="font-weight-bold">{{$categoryF->name_category}}</h5>
                            </a>
                            @foreach ($categoriesChildren as $categoryH)
                                @if ($categoryH->id_father_category == $categoryF->id_category)
                                <li>
                                    <a href="{{route('search',['tipo'=>'category','id'=> $categoryH->id_category])}}" data-abc="true">
                                        {{$categoryH->name_category}} 
                                    </a>
                                </li>
                                @endif
                            @endforeach
                         @endforeach
                    </ul>
                </div>
            </div>
        </article> {{-- Categorias --}}

        <article class="filter-group">
            <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2"
                    data-abc="true" aria-expanded="false" class="collapsed"> <i
                        class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">Marca </h6>
                </a> </header>
            <div class="filter-content collapse" id="collapse_aside2" style="">
                <div class="card-body pt-0">
                    <a href="{{route('shop')}}">
                        <p class="font-weight-bold">Todos</p>
                    </a>
                    <ul class="list-menu">
                        @foreach ($brands as $brand)
                            <li>
                                <a href="{{route('search',['tipo'=>'brand','id'=>$brand['id_brand']])}}" data-abc="true">
                                    {{ $brand['description']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </article> {{-- Marcas --}}

        <article class="filter-group">
            <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside0"
                    data-abc="true" aria-expanded="false" class="collapsed"> <i
                        class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">Price </h6>
                </a> </header>
            <div class="filter-content collapse" id="collapse_aside0" style="">
                <div class="card-body"> <input type="range" class="custom-range" min="0" max="100" name="">
                    <div class="form-row">
                        <div class="form-group col-md-6"> <label>Min</label> <input class="form-control"
                                placeholder="$0" type="number"> </div>
                        <div class="form-group text-right col-md-6"> <label>Max</label> <input
                                class="form-control" placeholder="$1,0000" type="number"> </div>
                    </div> <a href="#" class="highlight-button btn btn-medium button xs-margin-bottom-five"
                        data-abc="true">Apply Now</a>
                </div>
            </div>
        </article>
        <article class="filter-group">
            <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside3"
                    data-abc="true" aria-expanded="false" class="collapsed"> <i
                        class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">Size </h6>
                </a> </header>
            <div class="filter-content collapse" id="collapse_aside3" style="">
                <div class="card-body"> <label class="checkbox-btn"> <input type="checkbox"> <span
                            class="btn btn-light"> XS </span> </label> <label class="checkbox-btn"> <input
                            type="checkbox"> <span class="btn btn-light"> SM </span> </label> <label
                        class="checkbox-btn"> <input type="checkbox"> <span class="btn btn-light"> LG
                        </span> </label> <label class="checkbox-btn"> <input type="checkbox"> <span
                            class="btn btn-light"> XXL </span> </label> <label class="checkbox-btn"> <input
                            type="checkbox"> <span class="btn btn-light"> XXXL </span> </label> </div>
            </div>
        </article>
        <article class="filter-group">
            <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside4"
                    data-abc="true" class="collapsed" aria-expanded="false"> <i
                        class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">Rating </h6>
                </a> </header>
            <div class="filter-content collapse" id="collapse_aside4" style="">
                <div class="card-body"> <label class="custom-control"> <input type="checkbox" checked=""
                            class="custom-control-input">
                        <div class="custom-control-label">Better </div>
                    </label> <label class="custom-control"> <input type="checkbox" checked=""
                            class="custom-control-input">
                        <div class="custom-control-label">Best </div>
                    </label> <label class="custom-control"> <input type="checkbox" checked=""
                            class="custom-control-input">
                        <div class="custom-control-label">Good</div>
                    </label> <label class="custom-control"> <input type="checkbox" checked=""
                            class="custom-control-input">
                        <div class="custom-control-label">Not good</div>
                    </label> </div>
            </div>
        </article>
    </div>

</div> <!-- Filtros -->