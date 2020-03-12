@extends('dashboard.dashboard')

@section('product')

    <div class="col-6">
            <table class="table table-bordered">
                <thead class="thead-ligth">
                    <tr class="table-info">
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoria Padre</th>
                    </tr>
                </thead> <!-- Columnas Tabla -->
                
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id_category}}</td>
                            <td>{{$category->name_category}}</td>
                            <td>{{$categoty->id_father_category}}</td>
                        </tr>
                    @endforeach
                </tbody> <!-- Registros Tabla -->
            </table>
    </div>

@endsection