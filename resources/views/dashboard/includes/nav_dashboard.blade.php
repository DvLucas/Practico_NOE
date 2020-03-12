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
                <h6 class="title">Productos </h6>
            </a> </header>
        <div class="filter-content collapse" id="collapse_aside1" style="">
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
                                <a href="" data-abc="true">
                                    Marcas
                                </a>
                            </li>
                </ul>
            </div>
        </div>
    </article> 

</div>