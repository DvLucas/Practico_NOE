<div class="col px-0">
    <div class="row justify-content-center m-0">
        @foreach ($products as $item)

        <div class="col-10 col-md-4 text-center border shadow-item">
            <div class="row item">
                <div class="col-12 my-2">
                    <div class="row item-header justify-content-between align-items-center"
                        style="height: 30px;">
                        <div class="col-4 d-flex">
                            @if ($item->stock)
                                <span class='badge badge-success mr-1'>Stock</span>
                            @endif
                            {{-- @if()  --}}
                                <span class='badge badge-info'>Nuevo</span>
                        </div>
                        <div class="col-2 conte-fav text-danger">
                            <a href="carrito.php">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- item header -->

                <div class="col-12">
                    <a href="item.php">
                        <img src="https://blog.terranea.es/wp-content/uploads/2017/10/bicicleta-inglesa.jpg" class="card-img-top" alt="...">
                        <div class="row btn-group btn-group-toggle justify-content-center mt-2"
                            data-toggle="buttons">

                            <?php /* foreach ($producto1["color"] as $nombre => $valor): */ ?>

                            {{-- <label class="col-2 btn btn-ligh active tooltipt"
                                style="background-color: ;">

                                <input type="radio" name="options" id="option1" checked>
                                <span class="tooltiptextt"></span>

                            </label> --}}


                            <?php /* endforeach; */ ?>

                        </div>
                    </a>
                </div> <!-- imagen -->

                <div class="col-12 mt-3">
                    <h1 class="h5 titulos-categorias-tienda">{{ $item->name}}</h1>
                    <h6 class="categorias-tienda">${{ $item->price }}</h6>
                </div> <!-- Informacion item -->

                <a class="col-12 py-2 mb-3 btn-comprar categorias-tienda" href="carrito.php">Comprar</a>

            </div>
        </div> <!-- Producto -->

        @endforeach
    </div>
</div> <!-- Productos -->