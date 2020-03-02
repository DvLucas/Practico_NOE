@extends('dashboard.dashboard')

@section('product')

    <div class="col-10 mt-2">
                            
    </div>
    <div class="col-2 mt-2 text-right">
        <a href="{{ route('products.create') }}" class="btn btn-success">Nuevo</a>
    </div>
    <div class="col-12 mt-2">

        <table class="table table-bordered">
            <thead class="thead-ligth">
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">description</th>
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
                <tr>
                    @foreach ($products as $product)
                        <td>{{$product->id_product}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->brand}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                        <td></td>
                    @endforeach

                </tr>
            </tbody> <!-- Registros Tabla -->
        </table>
    </div>
@endsection