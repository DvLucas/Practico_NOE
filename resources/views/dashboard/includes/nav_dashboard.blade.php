<style>

    .icon-control {
        margin-top: 6px;
        float: right;
        font-size: 80%;
        transform: rotate(-90deg);
        transition: 0.5s;
    }

    .list-menu {
        list-style: none;
        margin: 0;
        padding-left: 0
    }

    .list-menu a {
        color: #c3c3c3;
    }
    a {
        text-decoration: none !important;
        background-color: transparent
    }

    .rotate {
        transform: rotate(0deg);
        transition: 0.5s;
    }

</style>

<div class="card" style="border: 0;">
    <article class="filter-group">
        <header class="card-header bg-dark"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1"
                data-abc="true" aria-expanded="false" class="collapsed" id="a-icon-nav"> <i
                    class=" icon-control text-white fa fa-chevron-down" id="icon-nav"></i>
                <h6 class="title text-white">Productos </h6>
            </a> </header>
        <div class="filter-content collapse bg-dark" id="collapse_aside1" style="">
            <div class="card-body pt-0">
                <ul class="list-menu">
                            <li>
                                <a href="{{route('products.index')}}" data-abc="true">
                                    Listar
                                </a>
                            </li>
                            <li>
                                <a href="{{route('categories.index')}}" data-abc="true">
                                    Categorias
                                </a>
                            </li>
                            <li>
                                <a href="{{route('colors.index')}}" data-abc="true">
                                    Colores
                                </a>
                            </li>
                            <li>
                                <a href="{{route('brands.index')}}" data-abc="true">
                                    Marcas
                                </a>
                            </li>
                </ul>
            </div>
        </div>
    </article> 

</div>