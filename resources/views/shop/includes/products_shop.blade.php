<div class="col px-0 min-vh-100">
    <div class="row justify-content-around m-0">
        @foreach ($products as $item)

        <div class="col-10 col-md-3 m-2 text-center item shadow-item">

            <div class="frhoverinfo">
                <ul class="productaction p-0">
                    <li title="Favoritos">
                        <i class="color-gris fa fa-heart"></i>
                    </li>
                    <li class="cart" title="Agregar a carrito">

                        <i id="cart-{{$item->id_product}}" 
                            class="add-cart 
                            @if( !empty(session('carrito')) && in_array($item->id_product, session('carrito')) ) 
                                {{ 'exists text-success' }} 
                            @endif 
                            fas fa-shopping-cart color-gris">
                        </i>

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
                        <div class="col-7 pr-0 text-center">
                        </div>
                    </div>
                </div>

                <div class="col-12 p-0"> <!-- imagen -->
                    <a href="{{route('item',$item)}}" class="row">
                        @foreach ($item->gallery as $image )
                            @if($image['store'] == 1)
                                <div class="col-12">
                                    <img src="{{asset($image['url'])}}" class="img-fluid" alt="...">
                                </div>
                            @endif
                        @endforeach
                    </a>
                        <div class="row btn-group btn-group-toggle justify-content-center mt-2" data-toggle="buttons">
                            <ul class="list-group list-group-horizontal ul-color">
                            @foreach ($item->color_product as $colorP)
                                @foreach ($colors as $color)
                                    @if($colorP->id_color == $color->id_color)
                                    <li class="mx-1 li-color" id="li-{{$colorP->id_color_product}}" data-product="{{$item->id_product}}" >
                                        <span class="tooltipt">
                                            <label class="color-item" style="background-color:{{$color->image}};">
                                                {{$color->name}}
                                            </label>
                                            <span class="tooltiptextt">
                                                {{$color->name}}
                                            </span>
                                        </span>
                                    </li>
                                    @endif
                                @endforeach
                            @endforeach
                            </ul>
                        </div>
                </div> 

                <div class="col-12 mt-3">  <!-- Informacion item -->
                    <h1 class="h5 titulos-categorias-tienda">{{ $item->name}}</h1>
                    <h6 class="categorias-tienda">${{ $item->price }}</h6>
                    
                </div>

                <a class="col-12 py-2  btn-comprar categorias-tienda" href="{{route('item',$item)}}">Ver Producto</a>

            </div>
        </div> <!-- Producto -->

        @endforeach
    </div>
</div> <!-- Productos -->