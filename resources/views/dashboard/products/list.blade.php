@extends('dashboard.dashboard')

@section('product')

    <div class="col-5 mt-2">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <div class="col-7 mt-2 text-right">
        <a href="{{ route('products.create') }}" class="btn btn-success">Nuevo</a>
    </div>
    <div class="col-12 mt-2 table-responsive">

        <table class="table table-bordered table-striped">
            <thead class="thead-dark ">
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    {{-- <th scope="col">description</th> --}}
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Creacion</th>
                    <th scope="col">Actualizacion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead> <!-- Columnas Tabla -->

            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id_product}}</td>
                    <td style='width:150px;'>{{$product->name}}</td>
                    <td>$ {{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->brand->description}}</td>
                    <td>{{$product->category->name_category}}</td>
                    <td>{{$product->created_at->format('d-M-y')}}</td>
                    <td>{{$product->updated_at->format('d-M-y')}}</td>
                    <td>
                        <a href="{{ route('products.edit',$product->id_product) }}" class="btn btn-warning"><i
                                class="fas fa-marker"></i></a>
                        <a href="{{ route('products.show',$product->id_product) }}" class="btn btn-info"><i
                                class="fas fa-image"></i></a>

                        <a href="{{ route('products.show_colors', $product->id_product) }}" class="btn btn-success"><i
                                class="fas fa-palette"></i></a>
                        

                        @if ($product->state == 0)
                        <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $product->id_product}}"
                            data-state="0" class="btn btn-success"><i class="fas fa-arrow-circle-up"></i></button>
                        @else
                        <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $product->id_product}}"
                            class="btn btn-danger"><i class="fas fa-arrow-circle-down"></i></button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody> <!-- Registros Tabla -->
        </table>
        {{$products->links()}}
    </div>


{{-- El siguiente modal se utiliza para dar alta o baja logica un producto en la tienda --}}
@include('dashboard.includes.modal_up_down_product')
@include('dashboard.includes.modal_image')

@endsection
