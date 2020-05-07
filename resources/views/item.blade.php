@extends('layouts.master')


@section('title')
{{$product['name']}}
@endsection


@section('content')

<main class="my-5">

        <!-- PRODUCTO + COMENTARIOS -->
        <div class="row justify-content-around">

            <!-- Card de producto -->
            <div class="col-10 col-lg-9">
            <div class="card col-12 justify-content-center">
                <div class="row bg-white">
                    <!-- Galeria -->
                    <aside class="col-md-6">
                        <div class="row">
                            <div class="preview-pic tab-content">
                                @foreach($product->gallery as $image)
                                @if($image['store'] == 1)
                                <div class="tab-pane active" id="pic-{{$image['id_gallery']}}"><img class="col-12"
                                        src="{{asset($image['url'])}}"></div>
                                @else
                                <div class="tab-pane" id="pic-{{$image['id_gallery']}}"><img class="col-12"
                                        src="{{asset($image['url'])}}"></div>
                                @endif
                                @endforeach
                            </div>
                            <ul class="preview-thumbnail nav overflow-hidden mb-3 mt-2">
                                @foreach($product->gallery as $image)
                                @if($image['store'] == 1)
                                <li class="active flaot-left col-3"><a data-target="#pic-{{$image['id_gallery']}}"
                                        data-toggle="tab"><img class="col-12" src="{{asset($image['url'])}}"></a></li>
                                @else
                                <li class="float-left col-3"><a data-target="#pic-{{$image['id_gallery']}}"
                                        data-toggle="tab"><img class="col-12" src="{{asset($image['url'])}}"></a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div> <!-- FIN ROW -->
                    </aside>

                    <!-- Descripcion del producto -->
                    <main class="col-md-6 border-left p-1">

                        <article class="content-body">
                            <!-- Titulo -->
                            <h2 class="title titulos-medio mt-2">{{$product['name']}}</h2>
                            <!-- estrellas y reviews del producto -->
                            <div class="rating-wrap my-3 overflow-hidden">
                                <div class="float-left ml-1">
                                    <small class="tex-noe-black botones-texto">&#9733; &#9733; &#9733; &#9733;
                                        &#9734;</small>
                                </div>
                                <p class="text-muted float-left ml-1 texto-parrafo">{{$product['created_at']}}</p>
                            </div>
                            <!-- precio -->
                            <div class="mb-3">
                                <p class="price titulos-medio">${{$product['price']}}</p>
                            </div>
                            <!-- descripcion del producto -->
                            <p class="texto-parrafo">{{$product['description']}}</p>
                            <!-- relativo al modelo color y desde donde proviene -->
                            <dl class="row">
                                <dt class="col-sm-3 botones-texto">Marca</dt>
                                <dd class="col-sm-9 botones-texto">{{$product['brand']->description}}</dd>
                                <dt class="col-sm-3 botones-texto">Stock</dt>
                                <dd class="col-sm-9 botones-texto">{{$product['stock']}}</dd>
                                <dt class="col-sm-3 botones-texto">Color</dt>
                                <dd class="col-sm-9 botones-texto">
                                    <div class="row btn-group btn-group-toggle justify-content-center mt-2" data-toggle="buttons">
                                        <ul class="list-group list-group-horizontal ul-color">
                                            @foreach ($product->color_product as $colorP)
                                                @foreach ($colors as $color)
                                                    @if($colorP->id_color == $color->id_color)
                                                    <li class="mx-1 li-color" id="li-{{$colorP->id_color_product}}" data-product="{{$product->id_product}}" >
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
                                </dd>
                            </dl>
                            <!-- linea separadora entre descripcion y detalles de compra -->
                            <hr>

                            <div class="form-row p-1">
                                <!-- botones para elegir cantidad de productos -->
                                <div class="botones-texto">
                                    <label class="ml-1">Cantidad</label>
                                    <div class="input-group mb-3 ml-1 input-spinner">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-dark btn-sumar" type="button" id="{{$product->id_product}}"> + </button>
                                        </div>
                                        <p class="pt-2 mb-0 col-3 cantItem" id="cant-{{$product->id_product}}">1</p>
                                        <div class="input-group-append">
                                            <button class="btn btn-dark btn-restar" type="button" id="{{$product->id_product}}"> − </button>
                                        </div>
                                    </div>
                                    <!-- botones de compra y agregar al carrito -->
                                    <a href="{{route('cart')}}" class="btn bg-yellow float-left botones-texto ml-1 @if(!empty(session('carrito')) && in_array($product->id_product, session('carrito')))@endif"> Comprar </a>
                                    <a href="#" class="btn bg-yellow float-left ml-1 botones-texto add-cart @if(!empty(session('carrito')) && in_array($product->id_product, session('carrito'))) {{ 'exists text-success' }}@else {{'text-muted'}} @endif" id="cart-{{$product->id_product}}">
                                    <i class="fas fa-shopping-cart"></i>Agregar al carrito</a>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>

            <div class="card producto col-md-12 p-0 mt-3 mb-3">
              <div class="card-header text-light bg-black">
                <p class="titulos-medio">Principales Comentarios</p>
              </div>
              <div class="card-body">
                <!-- seccion para dejar comentarios -->

                @if (Auth::check())
                <!--- Si es usuario, puede dejar comentarios en la publicacion ---> 
               
                <form action="{{route('comments.store')}}" method="post">
                    @csrf
                    <textarea class="col-md-12" name="body" id="" >{{old('body')}}</textarea>
                    <input hidden type="text" name="id_product" value="{{$product->id_product}}">
                    <input hidden type="text" name="id_user" value="{{Auth::user()->id}}">
                    <button class="btn bg-yellow botones-texto" type="submit">Enviar</button>

                </form>
                @endif
                <hr>
                @forelse ($product->comments as $comment)
                    @if (Auth::check() and ($comment->id_user == Auth::user()->id))
                        <!--- Chequea si el usuario es el autor del comentario, en cuyo caso puede eliminar y editar todos los comentarios del usuario ---> 
                        <div>
                            <p class="titulos-header text-noe-yellow"> {{ $comment->user->name }}</p>
                            <p class="texto-parrafo">{{$comment->created_at}}</p>
                            <p class="col-12 texto-parrafo">{{ $comment->body }}</p>

                            <div class="d-flex justify-content-end">
                                
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}

                                    <input hidden type="text" name="id_comment" value="{{$comment->id}}">
                                    <button class="btn btn-outline-danger btn-sm " type="submit">Eliminar</button>
                                </form>

                                <button class="btn btn-outline-dark btn-sm comment-to-edit" 
                                style="cursor: pointer" data-toggle="modal" 
                                data-target="#editCommentsModal" data-myid="{{$comment->id}}" 
                                data-mybody="{{$comment->body}}">Editar</button>

                                @include('editComment')

                            </div>
                            <hr>
                        </div>
                    @elseif (Auth::check() and (Auth::user()->id_rol == 1))
                        <!--- Chequea si el usuario es administrador, en cuyo caso puede eliminar y editar todos los comentarios ---> 
                        <div>
                            <p class="titulos-header text-noe-yellow"> {{ $comment->user->name }}</p>
                            <p class="texto-parrafo">{{$comment->created_at}}</p>
                            <p class="col-12 texto-parrafo">{{ $comment->body }}</p>

                            <div class="d-flex justify-content-end">
                                
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}

                                    <input hidden type="text" name="id_comment" value="{{$comment->id}}">
                                    <button class="btn btn-outline-danger btn-sm " type="submit">Eliminar</button>
                                </form>

                                <button class="btn btn-outline-dark btn-sm comment-to-edit" 
                                style="cursor: pointer" data-toggle="modal" 
                                data-target="#editCommentsModal" data-myid="{{$comment->id}}" 
                                data-mybody="{{$comment->body}}">Editar</button>

                                @include('editComment')

                            </div>
                            <hr>
                        </div>
                    @else
                    <!--- Si no es usuario, solo puede leer los comentarios ---> 
                    <div>
                        <p class="titulos-header text-noe-yellow"> {{ $comment->user->name }}</p>
                        <p class="texto-parrafo">{{$comment->created_at}}</p>
                        <p class="col-12 texto-parrafo">{{ $comment->body }}</p>
                        <hr>
                    </div>
                    @endif
                @empty
                    <!--- Si el post no tiene comentarios ---> 
                    <p class="col-12 texto-parrafo">Este artículo no posee comentarios.</p>
                @endforelse


              </div>
            </div>
            </div>


            <!-- COLUMNA DE PRODUCTOS RELACIONADOS -->
            <div class=" col-9 col-lg-2 float-left">
                <div class="row ">
                    <div class="card-header text-light bg-black col-12">
                        <p class="titulos-header">Productos relacionados</p>
                    </div>
                <!-- fin titulo -->

                    <div class="col-12">
                        <div class="row justify-content-around">
                            @foreach($related as $related_product) 
                                <div class="card producto mb-3 col-12 p-0">
                                    <a href="" class="text-center p-3">
                                        @foreach($related_product->gallery as $image)
                                            @if($image['store'] == 1)
                                            <img src="{{asset($image['url'])}}" class="card-img-top img-fluid" alt="..."
                                                style="max-width: 13rem;">
                                            @endif
                                        @endforeach
                                    </a>
                                    <div class="card-body botones-texto my-0 py-0">
                                        <a href="#">
                                            <h6 class="mb-1">{{$related_product['name']}}</h6>
                                        </a>
                                        <p class="texto-parrafo mb-1">${{$related_product['price']}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-noe-black botones-texto">&#9733; &#9733; &#9733; &#9733;
                                            &#9734;</small>
                                    </div>
                                </div>
                            @endforeach
                        </div> <!-- fin columnas productos -->
                    </div> <!-- fin row productos relacionados -->
                </div> <!-- fin row -->
            </div>


</main>
@endsection
