<div class="col px-0">
    <div class="row justify-content-around m-0">
        @foreach ($products as $item)

        <div class="col-10 col-md-3 m-2 text-center item shadow-item">

            <div class="frhoverinfo">
                <ul class="productaction p-0">
                    <li><a class="favor" href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a id="cart-{{$item->id_product}}" class="add-cart @if(!empty(session('carrito')) && in_array($item->id_product, session('carrito'))) {{ 'exists text-success' }} @endif" href="#cart-{{$item->id_product}}">
                            <i id="icon-cart-{{$item->id_product}}" class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="row item">

                <div class="col-12 my-2">  <!-- item header -->
                    <div class="row item-header justify-content-between align-items-center"
                        style="height: 30px;">
                        <div class="col-4 d-flex">
                            @if ($item->stock > 0)
                                <span class='badge badge-success mr-1'>Stock</span>
                            @endif
                            @if($item->updated_at->format('m,y') == $now->format('m,y'))
                                <span class='badge badge-info'>Nuevo</span>
                            @endif    
                        </div>
                        <div class="col-2 conte-fav d-flex">
                            {{-- <a href="carrito.php" class="text-danger">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="#" class="add-cart @if(!empty(session('carrito')) && in_array($item->id_product, session('carrito'))) {{ 'exists text-success' }}@else {{'text-muted'}} @endif" 
                                id="cart-{{$item->id_product}}">
                                <i class="fas fa-cart-plus"></i>
                            </a> --}}
                        </div>
                    </div>
                </div>

                <div class="col-12 p-0"> <!-- imagen -->
                    <a href="item.php">
                        @foreach ($item->gallery as $image )
                            @if($image['store'] == 1)
                                <img src="{{asset($image['url'])}}" class="img-fluid" alt="...">
                            @endif
                        @endforeach
                        {{-- <div class="row btn-group btn-group-toggle justify-content-center mt-2"
                            data-toggle="buttons">

                             <label class="col-2 btn btn-ligh active tooltipt"
                                style="background-color: ;">

                                <input type="radio" name="options" id="option1" checked>
                                <span class="tooltiptextt"></span>

                            </label> 

                        </div> --}}
                    </a>
                </div> 

                <div class="col-12 mt-3">  <!-- Informacion item -->
                    <h1 class="h5 titulos-categorias-tienda">{{ $item->name}}</h1>
                    <h6 class="categorias-tienda">${{ $item->price }}</h6>
                </div>

                <a class="col-12 py-2  btn-comprar categorias-tienda" href="{{route('cart')}}">Comprar</a>

            </div>
        </div> <!-- Producto -->

        @endforeach
    </div>
</div> <!-- Productos -->